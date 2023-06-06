<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'application_number',
        'full_name',
        'ic_number',
        'phone_number',
        'bin_type',
        'ic_front',
        'ic_back',
        'bill_utility'
    ];
}
