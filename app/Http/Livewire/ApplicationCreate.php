<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Application as ApplicationModel;

class ApplicationCreate extends Component
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
        //dd($this->ic_front->getClientOriginalExtension());
        $random_number = rand();

        $this->validate([
            'ic_front' => 'image|max:1024',
            'ic_back' => 'image|max:1024',
            'bill_utility' => 'image|max:1024'
        ]);
        ApplicationModel::create(
            [
                'application_number' => $random_number,
                'full_name' => $this->full_name,
                'ic_number' => $this->ic_number,
                'phone_number' => $this->phone_number,
                'bin_type' => $this->bin_type,
                'ic_front' => "/ic_front" . "/" . $this->ic_front->getClientOriginalName(),
                'ic_back' => "/ic_back" . "/" . $this->ic_back->getClientOriginalName(),
                'bill_utility' => "/bill_utility" . "/" . $this->bill_utility->getClientOriginalName()
            ]
        );

        $this->ic_front->storeAs('ic_front', $this->ic_front->getClientOriginalName(), 'public');
        $this->ic_back->storeAs('ic_back', $this->ic_back->getClientOriginalName(), 'public');
        $this->bill_utility->storeAs('bill_utility', $this->bill_utility->getClientOriginalName(), 'public');

        $this->full_name = "";
        $this->ic_number = "";
        $this->phone_number = "";
        $this->bin_type = "";
        $this->ic_front = "";
        $this->ic_back = "";
        $this->bill_utility = "";

        session()->flash('message', 'Form has been saved');
    }

    public function render()
    {
        return view('livewire.application-create');
    }
}
