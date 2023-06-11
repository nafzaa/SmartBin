<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Application as ApplicationModel;

class ApplicationCreate extends Component
{
    use WithFileUploads;

    public $scheme;
    public $premise;
    public $application_category;
    public $application_type="penggantian";
    public $location_premise_program;
    public $street_name;
    public $park_name;
    public $zip_code;
    public $state;
    public $bill_utility;
    public $recipient_full_name;
    public $recipient_status;
    public $recipient_ic_number;
    public $recipient_phone_number;
    public $recipient_email;
    public $recipient_nationality;
    public $ic_front;
    public $ic_back;
    public $bin_type;
    public $bin_amount;
    public $bin_serial_number;
    public $bin_serial_number_old;
    public $bin_acceptance_category;
    public $bin_acceptance_notes;
    public $bin_picture_delivered;
    public $worker_name;
    public $worker_number;
    public $lorry_number;

    // protected $rules = [
    //     'scheme' => 'required',
    //     'full_name' => 'required',
    //     'ic_number' => 'required',
    //     'phone_number' => 'required',
    //     'bin_type' => 'required',
    //     'ic_front' => 'required',
    //     'ic_back' => 'required',
    //     'bill_utility' => 'required'
    // ];

    public function render()
    {
        return view('livewire.application-create');
    }

    public function store()
    {
        // dd($this->application_type);
        $random_number = rand();
        // dd($random_number);

        $this->validate([
            'scheme' => 'string|max:255',
            'premise' => 'string|max:255',
            'application_category' => 'string|max:255',
            'application_type' => 'string|max:255',
            'location_premise_program' => 'string|max:255',
            'street_name' => 'string|max:255',
            'park_name' => 'string|max:255',
            'zip_code' => 'string|max:255',
            'state' => 'string|max:255',
            'recipient_full_name' => 'string|max:255',
            'recipient_status' => 'string|max:255',
            'recipient_ic_number' => 'string|max:255',
            'recipient_phone_number' => 'string|max:255',
            'recipient_email' => 'string|max:255',
            'recipient_nationality' => 'string|max:255',
            'bin_type' => 'string|max:255',
            'bin_amount' => 'string|max:255',
            'bin_serial_number' => 'string|max:255',
            'bin_serial_number_old' => 'string|max:255',
            'bin_acceptance_category' => 'string|max:255',
            'bin_acceptance_notes' => 'string|max:255',
            'bin_picture_delivered' => 'string|max:255',
            'worker_name' => 'string|max:255',
            'worker_number' => 'string|max:255',
            'lorry_number' => 'string|max:255',

            // 'ic_front' => 'image|max:1024',
            // 'ic_back' => 'image|max:1024',
            // 'bill_utility' => 'image|max:1024'
        ]);
        ApplicationModel::create(
            [
                'scheme' => $this->scheme,
                'premise' =>$this->premise,
                'application_category' =>$this->application_category,
                'application_type' =>$this->application_type,
                'location_premise_program' =>$this->location_premise_program,
                'street_name' =>$this->street_name,
                'park_name' =>$this->park_name,
                'zip_code' =>$this->zip_code,
                'state' =>$this->state,
                // 'bill_utility' =>"/bill_utility" . "/" . $this->bill_utility->getClientOriginalName(),
                'recipient_full_name' =>$this->recipient_full_name,
                'recipient_status' =>$this->recipient_status,
                'recipient_ic_number' =>$this->recipient_ic_number,
                'recipient_phone_number' =>$this->recipient_phone_number,
                'recipient_email' =>$this->recipient_email,
                'recipient_nationality' =>$this->recipient_nationality,
                // 'ic_front' =>"/ic_front" . "/" . $this->ic_front->getClientOriginalName(),
                // 'ic_back' =>"/ic_back" . "/" . $this->ic_back->getClientOriginalName(),
                'bin_type' =>$this->bin_type,
                'bin_amount' =>$this->bin_amount,
                'bin_serial_number' =>$this->bin_serial_number,
                'bin_serial_number_old' =>$this->bin_serial_number_old,
                'bin_acceptance_category' =>$this->bin_acceptance_category,
                'bin_acceptance_notes' =>$this->bin_acceptance_notes,
                'bin_picture_delivered' =>$this->bin_picture_delivered,
                'worker_number' =>$this->worker_number,
                'worker_number' =>$this->worker_number,
                'lorry_number' =>$this->lorry_number,

                // 'application_number' => $random_number,
                // 'full_name' => $this->full_name,
                // 'ic_number' => $this->ic_number,
                // 'phone_number' => $this->phone_number,
                // 'bin_type' => $this->bin_type,
                // 'ic_front' => "/ic_front" . "/" . $this->ic_front->getClientOriginalName(),
                // 'ic_back' => "/ic_back" . "/" . $this->ic_back->getClientOriginalName(),
                // 'bill_utility' => "/bill_utility" . "/" . $this->bill_utility->getClientOriginalName()
            ]
        );

        // $this->ic_front->storeAs('ic_front', $this->ic_front->getClientOriginalName(), 'public');
        // $this->ic_back->storeAs('ic_back', $this->ic_back->getClientOriginalName(), 'public');
        // $this->bill_utility->storeAs('bill_utility', $this->bill_utility->getClientOriginalName(), 'public');
        
        $this->scheme = "";
        $this->premise = "";
        $this->application_category= "";
        $this->application_type= "";
        $this->location_premise_program= "";
        $this->street_name= "";
        $this->park_name= "";
        $this->zip_code= "";
        $this->state= "";
        // $this->bill_utility= "";
        $this->recipient_full_name= "";
        $this->recipient_status= "";
        $this->recipient_ic_number= "";
        $this->recipient_phone_number= "";
        $this->recipient_email= "";
        $this->recipient_nationality= "";
        // $this->ic_front= "";
        // $this->ic_back= "";
        $this->bin_type= "";
        $this->bin_amount= "";
        $this->bin_serial_number= "";
        $this->bin_serial_number_old= "";
        $this->bin_acceptance_category= "";
        $this->bin_acceptance_notes= "";
        $this->bin_picture_delivered= "";
        $this->worker_number= "";
        $this->worker_number= "";
        $this->lorry_number="";

        session()->flash('message', 'Form has been saved');
    }
}
