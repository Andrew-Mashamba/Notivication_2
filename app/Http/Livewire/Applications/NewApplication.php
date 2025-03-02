<?php

namespace App\Http\Livewire\Applications;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\Application;
use mysql_xdevapi\Exception;

class NewApplication extends Component
{


    public $users;
    public $search = '';
    public $isOpen = false; // Add this property
    public $isOpen2 = false; // Add this property
    public $user;
    public $clients;
    public $client_id;
    public $application_status;
    public $tenure;
    public $loan_id;
    public $loan_amount;
    public $created_at;
    public $commodity;
    public $amount_in_kilos;


    public $clientName;
    public $search2;
    public $commodities=null;

    public $stocks;
    public $kilos=[];
    public $checks=[];
    public $milestoneId;
    public $checked=[];
    public $valueAmount = 0;


    protected $rules = [
        'tenure' => 'required|string|max:255',
        'loan_amount' => 'required|email|max:255',
        'client_id' => 'required|string|max:255',
    ];


    public function processMark($id)
    {
        $this->valueAmount = 0;
        $firstCheckedValue =  $this->checked[$id];
        //dd($firstCheckedValue);
        if (is_numeric($firstCheckedValue)) {

            $existingRecord = DB::table('choises')
                ->where('client_id', $this->client_id)
                ->where('commodity_id', $id)
                ->first();

            if ($existingRecord) {
                DB::table('choises')
                    ->where('client_id', $this->client_id)
                    ->where('commodity_id', $id)
                    ->update([
                        'kilos' => $this->kilos[$id],
                        'choise' => 1,
                    ]);
            } else {
                DB::table('choises')->insert([
                    'client_id' => $this->client_id,
                    'commodity_id' => $id,
                    'kilos' => $this->kilos[$id],
                    'choise' => 1,
                ]);
            }

        } else {
            // Remove $id from $this->checks[]
            DB::table('choises')
                ->where('client_id', $this->client_id)
                ->where('commodity_id', $id)
                ->delete();
        }

        $choises = DB::table('choises')
            ->where('client_id', $this->client_id)
            ->get();


        foreach ($choises as $choice) {
            $kilos = $choice->kilos;
            $commodityId = $choice->commodity_id;
            $amount = (int)$kilos * (int)DB::table('commodities')->where('id',$choice->commodity_id)->value('price_per_kilo');
            $this->valueAmount = $this->valueAmount + $amount;
        }


    }


    public function toggleDropdownx()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function closeDropdown($id)
    {
        $this->commodities = null;
        $this->user = $id;
        $this->client_id = $id;
        $this->clientName = DB::table('farmers')->where('id', $this->user)->value('first_name') . ' ' .
            DB::table('farmers')->where('id', $this->user)->value('last_name');

        $this->isOpen = false;
        $this->updatedUser();

    }

    public function updatedUser()
    {
        if (!$this->commodities) {
            $this->commodities = DB::table('stocks')->where('client_id', $this->client_id)->get()->toArray();
            $this->commodities = json_encode($this->commodities);
        }
    }

    public function saveClientInfo()
    {

        $secondProcessId = DB::table('processes')
            ->skip(1)
            ->take(1)
            ->pluck('id')
            ->first();

        $process = $secondProcessId ?? null;

        $id= Application::create([
            'tenure' => $this->tenure,
            'loan_amount' => $this->loan_amount,
            'client_id' => $this->client_id,
            'application_status' => 'PENDING',
            'approval_status' => 'PENDING',
            'process' => $process,
            'step' => 1
        ])->id;

        $choises = DB::table('choises')
            ->where('client_id', $this->client_id)
            ->get();

        foreach ($choises as $choice) {
            $kilos = $choice->kilos;
            $commodityId = $choice->commodity_id;
            $amount = (int)$kilos * (int)DB::table('commodities')->where('id',$choice->commodity_id)->value('price_per_kilo');

            DB::table('pledges')->insert([
                'client_id' => $this->client_id,
                'application_id' => $id,
                'commodity_id' => $commodityId, // Assuming you want to insert the current date and time
                'kilos' => $kilos, // Assuming you want to set the created_at timestamp to the current date and time
                'amount'=> $amount,
                'Status' => 'PLEDGED', // Assuming you want to set the updated_at timestamp to the current date and time
            ]);


            // Check if a record with the specified client_id and commodity_id exists
            $existingRecord = DB::table('stocks')
                ->where('client_id', $this->client_id)
                ->where('commodity_id', $commodityId)
                ->first();

            if ($existingRecord) {
                // Update the existing record
                try {
                    // Update pledged_kilos


                    $value = ((int)DB::table('stocks')
                        ->where('client_id', $this->client_id)
                        ->where('commodity_id', $commodityId)->max('pledged_kilos') + (int)$kilos);

                    DB::table('stocks')
                        ->where('client_id', $this->client_id)
                        ->where('commodity_id', $commodityId)
                        ->update([
                            'pledged_kilos' => $value,
                        ]);

                // Update available_kilos
                    DB::table('stocks')
                        ->where('client_id', $this->client_id)
                        ->where('commodity_id', $commodityId)
                        ->decrement('available_kilos', (int)$kilos);



                }catch (Exception $exception){
                    dd($exception->getMessage());
                }

            }



        }

        // Remove $id from $this->checks[]
        DB::table('choises')
            ->where('client_id', $this->client_id)
            ->delete();


        session()->flash('message', 'Application has  created successfully.');

        $this->reset(); // Clear form fields after successful save
    }



    public function render()
    {

        if(trim($this->search == '')){
            $this->clients = DB::table('farmers')
                ->get();
        }else{
            $this->clients = DB::table('farmers')
                ->where('first_name', 'like', "%$this->search%")
                ->orWhere('last_name', 'like', "%$this->search%")
                ->orWhere('date_of_birth', 'like', "%$this->search%")
                ->orWhere('gender', 'like', "%$this->search%")
                ->orWhere('contact_number', 'like', "%$this->search%")
                ->orWhere('email', 'like', "%$this->search%")
                ->orWhere('address', 'like', "%$this->search%")
                ->orWhere('occupation', 'like', "%$this->search%")
                ->orWhere('education_level', 'like', "%$this->search%")
                ->orWhere('marital_status', 'like', "%$this->search%")
                ->orWhere('created_at', 'like', "%$this->search%")
                ->get();
        }





        return view('livewire.applications.new-application');
    }
}
