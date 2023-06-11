<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asset as AssetModel;

class AssetCreate extends Component
{
    public $asset_id;
    public $asset_no;
    public $asset_name;
    public $asset_type;

    // protected $rules = [
    //     'asset_id' => 'required',
    //     'asset_no' => 'required',
    //     'asset_name' => 'required',
    //     'asset_type' => 'required',
    // ];

    public function render()
    {
        return view('livewire.asset-create');
    }

    public function store()
    {
        $this->validate([
            'asset_id'=> 'string|max:255',
            'asset_no'=> 'string|max:255',
            'asset_name'=> 'string|max:255',
            'asset_type'=> 'string|max:255',
        ]);
        AssetModel::create([
            'asset_id'=>$this->asset_id,
            'asset_no'=>$this->asset_no,
            'name'=>$this->asset_name,
            'type'=>$this->asset_type,

        ]);
        $this->asset_id = "";
        $this->asset_no = "";
        $this->asset_name = "";
        $this->asset_type = "";
        session()->flash("message", "Asset has been saved");
    }
}
