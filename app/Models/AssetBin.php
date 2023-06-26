<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SettingBinType;

class AssetBin extends Model
{
    use HasFactory;

    protected $filable = [
        'm', // Bin Type
        's' // Bin Serial Number
    ];

    // public function belongsToAsset()
    // {
    //     return $this->belongsTo(SettingBinType::class, 'm');
    // }

    public function belongsToBinType()
    {
        return $this->belongsTo(SettingBinType::class, 'm');
    }
}
