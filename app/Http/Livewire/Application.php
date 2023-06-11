<?php

namespace App\Http\Livewire;

use App\Models\Application as ApplicationModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Application extends Component
{
    use WithFileUploads;

    // public $full_name;
    // public $ic_number;
    // public $phone_number;
    // public $bin_type;
    // public $application_type;

    // public $ic_front;
    // public $ic_back;
    // public $bill_utility;

    // protected $rules = [
    //     'full_name' => 'required',
    //     'ic_number' => 'required',
    //     'phone_number' => 'required',
    //     'bin_type' => 'required',
    //     'ic_front' => 'required',
    //     'ic_back' => 'required',
    //     'bill_utility' => 'required'
    // ];

    public function render()
    {
        $applicationModel = ApplicationModel::get();
        return view('livewire.application', compact('applicationModel'));
    }

    // public function deleteItem($itemId)
    // {
    //     dd($itemId);
    //     $item = ApplicationModel::findOrFail($itemId);
    //     $item->delete();
    // }

    public function destroy($application){
        $application = ApplicationModel::findOrFail($application);
        $application->delete();
        return back();
    }
}
