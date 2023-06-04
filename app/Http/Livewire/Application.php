<?php

namespace App\Http\Livewire;

use App\Models\Application as ModelsApplication;
use Livewire\Component;

class Application extends Component
{

    public $full_name;

    public function render()
    {
        return view('livewire.application');
    }

    public function store()
    {
        dd($this->full_name);
    }
}
