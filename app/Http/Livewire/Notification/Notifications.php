<?php

namespace App\Http\Livewire\Notification;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Notifications extends Component
{
    public $viewLoaded="all";
    public $options = []; // Available options
    public $selected = []; // Selected options
    public $currentSelection = null;

    public $sources;
   public $message;
   public $email_option;

    public $source_id;
    public $sms_option;

    public function mount()
    {
        // Initialize available options
        $this->options = DB::table('subscribers')->pluck('subscriber_name', 'id')->toArray();

    }

    public function save(){
        $this->validate([

            'source_id'=>'required',
            'selected'=> 'required',
            'message'=>'required',
            'email_option' => 'required_if:sms_option,null',
            'sms_option' => 'required_if:email_option,null',

        ]);

        session()->put('message','successfully saved');

        $sendNotification= 12;
        foreach ($this->selected as $subscriber_id){
            $subscriber=DB::table('subscribers')->where('id',$subscriber_id)->first();


        $params=[
            'source_id'=>$this->source_id,
            'message'=>$this->message,
           // 'email_option'=>$this->email_option ?:null,
            //'sms_option'=>$this->sms_option ? :null,
            'subscriber_id'=>'255624451311',
            'service_id'=>1,
            'provider_id'=>'123provider'
        ];

        $url='http://127.0.0.1/notifications/api/notifications';
       try{
           $response = Http::post($url, $params);

           if($response->ok()){
               dd($response->body());
           }else{
               dd($response->status(),
                    $response->body());
           }

       }catch (\Exception $error){
           dd($error->getMessage());
        }

        }



    }

    public function setOption()
    {
        // Add current selection if it's not null and not already in the selected array
        if ($this->currentSelection && !in_array($this->currentSelection, $this->selected)) {
            $this->selected[] = $this->currentSelection;
            $this->currentSelection = null; // Reset current selection
        }
    }


    public function removeOption($option)
    {
        // Remove option from selected array
        $this->selected = array_filter($this->selected, function ($item) use ($option) {
            return $item !== $option;
        });
    }



    function loadView($string){
        $this->viewLoaded=$string;
    }
    public function render()
    {
        $this->sources=DB::table('sources')->get();

        return view('livewire.notification.notifications');
    }
}
