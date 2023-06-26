<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asset_bins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m')->nullable(); //Refer to PDF No Siri Bin
            $table->string('s')->nullable(); //Refer to PDF No Siri Bin
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('asset_bins', function (Blueprint $table) {
            $table->foreign('m')->references('id')->on('setting_bin_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_bins');
    }
};
