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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scheme')->nullable();
            $table->unsignedBigInteger('premise')->nullable();
            // $table->string('application_category')->nullable();
            $table->unsignedBigInteger('application_category')->nullable();
            // $table->string('application_type')->nullable();
            $table->unsignedBigInteger('application_type')->nullable();
            $table->string('location_premise_program')->nullable();
            $table->string('street_name')->nullable();
            $table->string('park_name')->nullable();
            $table->string('zip_code')->nullable();
            // $table->string('state')->nullable();
            $table->unsignedBigInteger('state')->nullable();
            $table->string('bill_utility')->nullable();
            $table->string('recipient_full_name')->nullable();
            // $table->string('recipient_status')->nullable();
            $table->unsignedBigInteger('recipient_status')->nullable();
            $table->string('recipient_ic_number')->nullable();
            $table->string('recipient_phone_number')->nullable();
            $table->string('recipient_email')->nullable();
            // $table->string('recipient_nationality')->nullable();
            $table->unsignedBigInteger('recipient_nationality')->nullable();
            $table->string('ic_front')->nullable();
            $table->string('ic_back')->nullable();
            // $table->string('bin_type')->nullable();
            $table->unsignedBigInteger('bin_type')->nullable();
            $table->string('bin_amount')->nullable();
            $table->string('bin_serial_number')->nullable();
            $table->string('bin_serial_number_old')->nullable();
            // $table->string('bin_acceptance_category')->nullable();
            $table->unsignedBigInteger('bin_acceptance_category')->nullable();
            $table->string('bin_acceptance_notes')->nullable();
            $table->string('bin_picture_delivered')->nullable();
            $table->string('worker_number')->nullable();
            $table->string('lorry_number')->nullable();
            $table->unsignedBigInteger('application_status')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::table('applications', function (Blueprint $table) {
            $table->foreign('scheme')->references('id')->on('setting_schemes')->onDelete('cascade');
            $table->foreign('premise')->references('id')->on('setting_premise_types')->onDelete('cascade');
            $table->foreign('application_category')->references('id')->on('setting_application_categories')->onDelete('cascade');
            $table->foreign('application_type')->references('id')->on('setting_bin_deliveries')->onDelete('cascade');
            $table->foreign('state')->references('id')->on('setting_negeris')->onDelete('cascade');
            $table->foreign('recipient_status')->references('id')->on('setting_recipients')->onDelete('cascade');
            $table->foreign('recipient_nationality')->references('id')->on('setting_citizens')->onDelete('cascade');
            $table->foreign('bin_type')->references('id')->on('setting_bin_types')->onDelete('cascade');
            $table->foreign('bin_acceptance_category')->references('id')->on('setting_bin_acceptance_categories')->onDelete('cascade');
            $table->foreign('application_status')->references('id')->on('setting_application_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
