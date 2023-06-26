<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Application as ApplicationModel;
use App\Models\SettingScheme as SettingSchemeModel;
use App\Models\SettingPremiseType as SettingPremiseTypeModel;
use App\Models\SettingApplicationCategory as SettingApplicationCategoryModel;
use App\Models\SettingBinDelivery as SettingBinDeliveryModel;
use App\Models\SettingNegeri as SettingNegeriModel;
use App\Models\SettingRecipient as SettingRecipientModel;
use App\Models\SettingCitizen as SettingCitizenModel;
use App\Models\SettingBinType as SettingBinTypeModel;
use App\Models\AssetBin as AssetBinModel;
use App\Models\SettingBinAcceptanceCategory as SettingBinAcceptanceCategoryModel;

class ApplicationCreate extends Component
{
    use WithFileUploads;

    public $scheme=null;
    public $premise=null;
    public $application_category=null;
    public $application_type=null;
    public $location_premise_program=null;
    public $street_name=null;
    public $park_name=null;
    public $zip_code=null;
    public $state=null;
    public $bill_utility=null;
    public $recipient_full_name=null;
    public $recipient_status=null;
    public $recipient_ic_number=null;
    public $recipient_phone_number=null;
    public $recipient_email=null;
    public $recipient_nationality=null;
    public $ic_front=null;
    public $ic_back=null;
    public $bin_type=null;
    public $bin_amount=null;
    public $bin_serial_number=null;
    public $bin_serial_number_old=null;
    public $bin_acceptance_category=null;
    public $bin_acceptance_notes=null;
    public $bin_picture_delivered=null;
    public $worker_name=null;
    public $worker_number=null;
    public $lorry_number=null;
    public $application_status_new = 1;

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
        $settingSchemeModels = SettingSchemeModel::get();
        $settingPremiseTypeModels = SettingPremiseTypeModel::get();
        $settingApplicationCategoryModels = SettingApplicationCategoryModel::get();
        $settingBinDeliveryModel = SettingBinDeliveryModel::get();
        $settingNegeriModel = SettingNegeriModel::get();
        $settingRecipientModel = SettingRecipientModel::get();
        $settingCitizenModel = SettingCitizenModel::get();
        $settingBinTypeModel = SettingBinTypeModel::get();

        $settingBinTypeModelArray = [];
        for ($i=0; $i < count($settingBinTypeModel); $i++) { 
            $settingBinTypeModelArray = $settingBinTypeModel[$i];
            
        }
        // dd($settingBinTypeModelArray);
        // dd($assetBinModel);
        
        $assetBinModel = AssetBinModel::where('status', 'In Stock')->orderBy('created_at', 'desc')->get();
        // $assetBinModel = AssetBinModel::where('status', 'In Stock')->get();
        // dd($assetBinModel);
        $settingBinAcceptanceCategoryModel = SettingBinAcceptanceCategoryModel::get();

        return view('livewire.application-create', compact(
            'settingSchemeModels',
            'settingPremiseTypeModels',
            'settingApplicationCategoryModels',
            'settingBinDeliveryModel',
            'settingNegeriModel',
            'settingRecipientModel',
            'settingCitizenModel',
            'settingBinTypeModel',
            'assetBinModel',
            'settingBinAcceptanceCategoryModel'
        ));
    }

    public function store()
    {
        // $application_status_new = 1;

        // $this->validate([
        //     'scheme' => 'integer',
        //     'premise' => 'integer',
        //     'application_category' => 'integer',
        //     'application_type' => 'integer',
        //     'location_premise_program' => 'string|max:255',
        //     'street_name' => 'string|max:255',
        //     'park_name' => 'string|max:255',
        //     'zip_code' => 'string|max:255',
        //     'state' => 'integer',
        //     'recipient_full_name' => 'string|max:255',
        //     'recipient_status' => 'integer',
        //     'recipient_ic_number' => 'string|max:255',
        //     'recipient_phone_number' => 'string|max:255',
        //     'recipient_email' => 'string|max:255',
        //     'recipient_nationality' => 'integer',
        //     'bin_type' => 'integer',
        //     'bin_amount' => 'string|max:255',
        //     'bin_serial_number' => 'string|max:255',
        //     'bin_serial_number_old' => 'string|max:255',
        //     'bin_acceptance_category' => 'integer',
        //     'bin_acceptance_notes' => 'string|max:255',
        //     'bin_picture_delivered' => 'string|max:255',
        //     'worker_name' => 'string|max:255',
        //     'worker_number' => 'string|max:255',
        //     'lorry_number' => 'string|max:255',

        //     'ic_front' => 'image|max:1024',
        //     'ic_back' => 'image|max:1024',
        //     'bill_utility' => 'image|max:1024'
        // ]);
        
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
                'bill_utility' => "/bill_utility" . "/" . $this->bill_utility->getClientOriginalName(),
                'recipient_full_name' =>$this->recipient_full_name,
                'recipient_status' =>$this->recipient_status,
                'recipient_ic_number' =>$this->recipient_ic_number,
                'recipient_phone_number' =>$this->recipient_phone_number,
                'recipient_email' =>$this->recipient_email,
                'recipient_nationality' =>$this->recipient_nationality,
                'ic_front' =>"/ic_front" . "/" . $this->ic_front->getClientOriginalName(),
                'ic_back' =>"/ic_back" . "/" . $this->ic_back->getClientOriginalName(),
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
                'application_status' =>$this->application_status_new

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
        
        $this->scheme =null;
        $this->premise =null;
        $this->application_category=null;
        $this->application_type=null;
        $this->location_premise_program=null;
        $this->street_name=null;
        $this->park_name=null;
        $this->zip_code=null;
        $this->state=null;
        $this->bill_utility=null;
        $this->recipient_full_name=null;
        $this->recipient_status=null;
        $this->recipient_ic_number=null;
        $this->recipient_phone_number=null;
        $this->recipient_email=null;
        $this->recipient_nationality=null;
        $this->ic_front= "";
        $this->ic_back= "";
        $this->bin_type=null;
        $this->bin_amount=null;
        $this->bin_serial_number=null;
        $this->bin_serial_number_old=null;
        $this->bin_acceptance_category=null;
        $this->bin_acceptance_notes=null;
        $this->bin_picture_delivered=null;
        $this->worker_number=null;
        $this->worker_number=null;
        $this->lorry_number=null;

        session()->flash('message', 'Form has been saved');
    }
}
