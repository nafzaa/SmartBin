<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bin as BinModel;

class Bin extends Component
{
    public function render()
    {
        $bins = BinModel::get();;
        return view('livewire.bin', compact('bins'));
    }
}
