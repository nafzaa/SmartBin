<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SettingScheme;
use App\Models\SettingPremiseType;
use App\Models\SettingNegeri;
use App\Models\SettingApplicationStatus;

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
        'lorry_number',
        'application_status'
    ];

    public function belongsToScheme(){
        return $this->belongsTo(SettingScheme::class, 'scheme');
    }

    public function belongsToPremiseType(){
        return $this->belongsTo(SettingPremiseType::class, 'premise');
    }

    public function belongsToState(){
        return $this->belongsTo(SettingNegeri::class, 'state');
    }
    
    public function belongsToApplicationStatus(){
        return $this->belongsTo(SettingApplicationStatus::class, 'application_status');
    }
}
