<?php

namespace App\Http\Livewire\Notification;
use App\Models\Transactions;
use App\Models\Clients;
use App\Models\Notification;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class NotificationTable extends LivewireDatatable
{

    public $exportable = true;





    public function columns(): array
    {

        return [

            Column::name('source_id')
                ->label('source id'),

            Column::raw('subscriber_id')
                ->label('subscriber id'),

            Column::raw('service_id')
                ->label('service id'),

            Column::raw('message')
                ->label('message'),

            Column::name('provider_id')
                ->label('provider id'),

            Column::name('rrn')
                ->label('rrn'),

            Column::name('third_part_rnn')
                ->label('third part rnn'),

            Column::name('provider_responce')
                ->label('provider responce'),

            Column::name('provider_responce_code')
                ->label('provider responce code'),

            Column::name('network_response_code')
                ->label('network response code')

                , Column::name('network_error_response_code')
                ->label('network error  response code')

                , Column::name('network_error_message')
                ->label('network error message')

                , Column::name('no_retrials')
                ->label('no retrials'),

                Column::name('no_resends')
                ->label('no resends'),

                Column::name('body_string_lenght')
                ->label('body string lenght'),

                Column::name('security_check_code')
                ->label('security check code'),

                Column::name('security_check_message')
                ->label('security check message'),

            

                Column::name('send_status')
                ->label('send status'),
                Column::name('receipt_status')
                ->label('receipt status'),

                Column::name('general_status')
                ->label('general status'),

                Column::name('status')
                ->label('status'),

        ];
    }


    public function builder()
    {
     $query=Notification::query();


     return $query;


    }
}
