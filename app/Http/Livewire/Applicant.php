<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\ModelS\Applicant as ApplicantModel;

class Applicant extends Component
{
    public function render()
    {
        $applicantModel = ApplicantModel::get();
        return view('livewire.applicant', compact('applicantModel'));
    }
}
