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

    public function render()
    {
        $applicationModel = ApplicationModel::get();
        // dd($applicationModel);
        return view('livewire.application', compact('applicationModel'));
    }

    // public function deleteItem($itemId)
    // {
    //     dd($itemId);
    //     $item = ApplicationModel::findOrFail($itemId);
    //     $item->delete();
    // }

    

    // public function store()
    // {
    //     $random_number = rand();

    //     $this->validate([
    //         'ic_front' => 'image|max:1024',
    //         'ic_back' => 'image|max:1024',
    //         'bill_utility' => 'image|max:1024'
    //     ]);
    //     ApplicationModel::create(
    //         [
    //             'application_number' => $random_number,
    //             'full_name' => $this->full_name,
    //             'ic_number' => $this->ic_number,
    //             'phone_number' => $this->phone_number,
    //             'bin_type' => $this->bin_type,
    //             'ic_front' => $this->ic_front,
    //             'ic_back' => $this->ic_back,
    //             'bill_utility' => $this->bill_utility
    //         ]
    //     );

    //     $this->ic_front->store('ic_front');
    //     $this->ic_back->store('ic_back');
    //     $this->bill_utility->store('bill_utility');

    //     $this->full_name = "";
    //     $this->ic_number = "";
    //     $this->phone_number = "";
    //     $this->bin_type = "";
    //     $this->ic_front = "";
    //     $this->ic_back = "";
    //     $this->bill_utility = "";

    //     session()->flash('message', 'Form has been saved');
    // }

    public function destroy($application){
        $application = ApplicationModel::findOrFail($application);
        $application->delete();
        return back();
    }
}
