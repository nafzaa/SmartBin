<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asset as AssetModel;
use App\Models\Application as ApplicationModel;
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
        // dd($application_total_count);

        return view('livewire.dashboard', compact(
            'asset_bin_count',
            'asset_others_count',
            'asset_bin_latest_created',
            'asset_others_latest_created',
            'asset_all_count',
            'asset_all_latest_created',
            'application_total_count'
        ));
    }

    public function delete()
    {
        dd('delete');
    }
}
