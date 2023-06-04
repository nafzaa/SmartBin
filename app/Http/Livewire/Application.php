<?php

namespace App\Http\Livewire;

// use App\Models\Application as ModelsApplication;
use Livewire\Component;
use Livewire\WithFileUploads;

class Application extends Component
{
    use WithFileUploads;

    public $ic_front;
    public $ic_back;

    public function store()
    {

        $this->validate([
            'ic_front' => 'required|image|max:1024',
            'ic_back' => 'required|image|max:1024'
        ]);

        // Save the file to storage or perform other actions
        $path1 = $this->ic_front->store('public/images');
        $path2 = $this->ic_back->store('public/images');

        // Reset the file property
        $this->ic_front = null;
        $this->ic_back = null;

        // Show success message or perform other actions
        session()->flash('message', 'File uploaded successfully!');
    }

    public function render()
    {
        return view('livewire.application');
    }
}
