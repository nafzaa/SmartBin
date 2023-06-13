<?php

namespace App\Http\Livewire;

use App\Models\Application as ApplicationModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Application extends Component
{
    use WithFileUploads;

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
