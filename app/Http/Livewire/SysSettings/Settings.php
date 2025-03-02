<?php

namespace App\Http\Livewire\SysSettings;

use App\Models\ServiceCheck;
use App\Models\ServiceParameter;
use App\Models\servicesModel;
use Livewire\Component;

class Settings extends Component
{

    public $serviceParameters;
    public $editId = null;
    public $service_type, $price_per_unit, $limit_per_day;

    public $services;
    public $selectedService;
    public $availableChecks;
    public $selectedChecks = [];

    protected $rules = [
        'service_type' => 'required|string',
        'price_per_unit' => 'required|numeric',
        'limit_per_day' => 'required|integer',
    ];

    public function mount()
    {
        $this->services = ServicesModel::all();
        $this->serviceParameters = ServiceParameter::all();
    }

    public function updatedSelectedService($serviceId)
    {
        $this->selectedService = $serviceId;
        $this->availableChecks = ServiceCheck::all();
        $this->selectedChecks = ServicesModel::find($serviceId)->pluck('id')->toArray();
    }

    public function saveChecks()
    {
        $service = ServicesModel::find($this->selectedService);
        $service->checks()->sync($this->selectedChecks);
        session()->flash('message', 'Service checks updated successfully!');
    }



    public function edit($id)
    {
        $parameter = ServiceParameter::findOrFail($id);
        $this->editId = $id;
        $this->service_type = $parameter->service_type;
        $this->price_per_unit = $parameter->price_per_unit;
        $this->limit_per_day = $parameter->limit_per_day;
    }

    public function save()
    {
        $this->validate();

        if ($this->editId) {
            $parameter = ServiceParameter::findOrFail($this->editId);
            $parameter->update([
                'service_type' => $this->service_type,
                'price_per_unit' => $this->price_per_unit,
                'limit_per_day' => $this->limit_per_day,
            ]);
        }

        $this->resetForm();
        $this->serviceParameters = ServiceParameter::all();
    }

    public function resetForm()
    {
        $this->editId = null;
        $this->service_type = '';
        $this->price_per_unit = '';
        $this->limit_per_day = '';
    }


    public function render()
    {
        return view('livewire.sys-settings.settings');
    }
}
