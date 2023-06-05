<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'ic_number',
        'phone_number',
        'bin_type',
        'ic_front',
        'ic_back',
        'bill_utility'
    ];
}
