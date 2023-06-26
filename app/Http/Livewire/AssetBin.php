<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AssetBin as AssetBinModel;

class AssetBin extends Component
{
    public function render()
    {
        $assetBinModel = AssetBinModel::get();
        return view('livewire.asset-bin', compact('assetBinModel'));
    }
}
