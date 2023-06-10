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
        Schema::create('bins', function (Blueprint $table) {
            $table->id();
            $table->string('skim');
            $table->string('jenispremis');
            $table->string('lokasi_nomborpremis_namaprogram');
            $table->string('namajalan');
            $table->string('namataman');
            $table->string('noposkod');
            $table->string('negeri');
            $table->string('statuspenerima');
            $table->string('namapenerima');
            $table->string('nokadpengenalan_nopassport');
            $table->string('notelefon');
            $table->string('emel');
            $table->string('warganegara');
            $table->string('kategoripermohonan');
            $table->string('jenistong');
            $table->string('jumlahtong');
            $table->string('nosiritong');
            $table->string('nosiritonglama');
            $table->string('kategoripenerimaantong');
            $table->string('catatan');
            $table->string('perakuanpenerima');
            $table->string('gambarpenghantarantong');
            $table->string('namapekerja');
            $table->string('nopekerja');
            $table->string('nolori');
            $table->string('penghantarantong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bins');
    }
};
