<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SettingScheme as SettingSchemeModel;
use App\Models\SettingPremiseType as SettingPremiseTypeModel;
use App\Models\SettingNegeri as SettingNegeriModel;
use App\Models\SettingRecipient as SettingRecipientModel;
use App\Models\SettingCitizen as SettingCitizenModel;
use App\Models\SettingApplicationCategory as SettingApplicationCategoryModel;
use App\Models\SettingBinType as SettingBinTypeModel;
use App\Models\SettingBinAcceptanceCategory as SettingBinAcceptanceCategoryModel;
use App\Models\SettingBinDelivery as SettingBinDeliveryModel;
use App\Models\SettingApplicationStatus as SettingApplicationStatusModel;

class Setting extends Component
{
    public function render()
    {

        $settingSchemeModels = SettingSchemeModel::where('show', true)->get();
        $settingPremiseTypeModels = SettingPremiseTypeModel::get();
        $settingNegeriModels = SettingNegeriModel::get();
        $settingRecipientModels = SettingRecipientModel::get();
        $settingCitizenModels = SettingCitizenModel::get();
        $settingApplicationCategoryModels = SettingApplicationCategoryModel::get();
        $settingBinTypes = SettingBinTypeModel::get();
        $settingBinAcceptanceCategoryModels = SettingBinAcceptanceCategoryModel::get();
        $settingBinDeliveryModels = SettingBinDeliveryModel::get();
        $settingApplicationStatusModel = SettingApplicationStatusModel::get();
        // dd($settingBinAcceptanceCategoryModels);

        return view('livewire.setting', compact(
            'settingSchemeModels',
            'settingPremiseTypeModels',
            'settingNegeriModels',
            'settingRecipientModels',
            'settingCitizenModels',
            'settingApplicationCategoryModels',
            'settingBinTypes',
            'settingBinAcceptanceCategoryModels',
            'settingBinDeliveryModels',
            'settingApplicationStatusModel'
        ));
    }

    public function destroy($scheme){
        // dd($scheme);
        $scheme = SettingSchemeModel::findOrFail($scheme);
        $scheme->show = false;
        $scheme->save();
        // $scheme->delete();
        return back();
    }
}
