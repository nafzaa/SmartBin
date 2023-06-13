<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asset as AssetModel;
use App\Models\Application as ApplicationModel;
use App\Models\SettingScheme as SettingSchemeModel;
use App\Models\SettingPremiseType as SettingPremiseTypeModel;
use Carbon\Carbon;

class Dashboard extends Component
{
    public function render()
    {
        // ASSET start
        $asset_bin_count = AssetModel::where('type', 'bin')->count();
        $asset_bin_latest_created = AssetModel::where('type', 'bin')->latest()->pluck('created_at')->first();
        $asset_others_count = AssetModel::whereNot('type', 'bin')->count();
        $asset_others_latest_created = AssetModel::whereNot('type', 'bin')->latest()->pluck('created_at')->first();
        $asset_all_count = AssetModel::get()->count();
        $asset_all_latest_created = AssetModel::latest()->pluck('created_at')->first();

        // APPLICATION
        $application_total_count = ApplicationModel::count();
        $applications = ApplicationModel::latest()->pluck('created_at')->first();

        // APPLICATION - SCHEME
        $application_scheme_1_count = ApplicationModel::where('scheme', 1)->count();
        $application_scheme_1 = ApplicationModel::where('scheme', 1)->first();
        $scheme_1 = SettingSchemeModel::where('id', 1)->first();

        $application_scheme_2_count = ApplicationModel::where('scheme', 2)->count();
        $application_scheme_2 = ApplicationModel::where('scheme', 2)->first();
        $scheme_2 = SettingSchemeModel::where('id', 2)->first();

        $application_scheme_3_count = ApplicationModel::where('scheme', 3)->count();
        $application_scheme_3 = ApplicationModel::where('scheme', 3)->first();
        $scheme_3 = SettingSchemeModel::where('id', 3)->first();

        // APPLICATION - PREMISE
        $application_premise_1_count = ApplicationModel::where('premise', 1)->count();
        $application_premise_1 = ApplicationModel::where('premise', 1)->first();
        $premise_1 = SettingPremiseTypeModel::where('id', 1)->first();

        $application_premise_2_count = ApplicationModel::where('premise', 2)->count();
        $application_premise_2 = ApplicationModel::where('premise', 2)->first();
        $premise_2 = SettingPremiseTypeModel::where('id', 2)->first();

        $application_premise_3_count = ApplicationModel::where('premise', 3)->count();
        $application_premise_3 = ApplicationModel::where('premise', 3)->first();
        $premise_3 = SettingPremiseTypeModel::where('id', 3)->first();

        return view('livewire.dashboard', compact(
            'asset_bin_count',
            'asset_others_count',
            'asset_bin_latest_created',
            'asset_others_latest_created',
            'asset_all_count',
            'asset_all_latest_created',
            'applications',
            'application_total_count',
            'scheme_1',
            'application_scheme_1',
            'application_scheme_1_count',
            'scheme_2',
            'application_scheme_2',
            'application_scheme_2_count',
            'scheme_3',
            'application_scheme_3',
            'application_scheme_3_count',
            'application_premise_1_count',
            'application_premise_1',
            'premise_1',
            'application_premise_2_count',
            'application_premise_2',
            'premise_2',
            'application_premise_3_count',
            'application_premise_3',
            'premise_3',
        ));
    }

    public function delete()
    {
        dd('delete');
    }
}
