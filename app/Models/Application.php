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
        'scheme',
        'premise',
        'application_category',
        'application_type',
        'location_premise_program',
        'street_name',
        'park_name',
        'zip_code',
        'state',
        'bill_utility',
        'recipient_full_name',
        'recipient_status',
        'recipient_ic_number',
        'recipient_phone_number',
        'recipient_email',
        'recipient_nationality',
        'ic_front',
        'ic_back',
        'bin_type',
        'bin_amount',
        'bin_serial_number',
        'bin_serial_number_old',
        'bin_acceptance_category',
        'bin_acceptance_notes',
        'bin_picture_delivered',
        'worker_name',
        'worker_number',
        'lorry_number'
    ];
}
