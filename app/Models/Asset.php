<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssetBin;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_id',
        'asset_no',
        'name',
        'type'
    ];
}
