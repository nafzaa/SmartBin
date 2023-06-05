<?php

namespace App\Http\Livewire;

use App\Models\Application as ApplicationModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Application extends Component
{
    use WithFileUploads;

    public $full_name;
    public $ic_number;
    public $phone_number;
    public $bin_type;
    public $application_type;

    public $ic_front;
    public $ic_back;
    public $bill_utility;

    protected $rules = [
        'full_name' => 'required',
        'ic_number' => 'required',
        'phone_number' => 'required',
        'bin_type' => 'required',
        'ic_front' => 'required',
        'ic_back' => 'required',
        'bill_utility' => 'required'
    ];

    public function store()
    {
        $this->validate([
            'ic_front' => 'image|max:1024',
            'ic_back' => 'image|max:1024',
            'bill_utility' => 'image|max:1024'
        ]);
        ApplicationModel::create(
            [
                'full_name' => $this->full_name,
                'ic_number' => $this->ic_number,
                'phone_number' => $this->phone_number,
                'bin_type' => $this->bin_type,
                'ic_front' => $this->ic_front,
                'ic_back' => $this->ic_back,
                'bill_utility' => $this->bill_utility
            ]
        );

        $this->ic_front->store('ic_front');
        $this->ic_back->store('ic_back');
        $this->bill_utility->store('bill_utility');

        session()->flash('message', 'Form has been saved');
    }

    public function render()
    {
        return view('livewire.application');
    }
}
