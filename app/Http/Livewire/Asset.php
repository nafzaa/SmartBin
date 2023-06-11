<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asset as AssetModel;

class Asset extends Component
{
    public function render()
    {
        $assets = AssetModel::get();
        return view('livewire.asset', compact('assets'));
    }
}
