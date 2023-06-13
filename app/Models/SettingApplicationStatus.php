<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Application;

class SettingApplicationStatus extends Model
{
    use HasFactory;

    public function hasManyApplication(){
        return $this->hasMany(Application::class, 'id');
    }
}
