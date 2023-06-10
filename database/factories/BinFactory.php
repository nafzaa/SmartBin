<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bin>
 */
class BinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'skim' => fake()->name(),
            'jenispremis' => fake()->name(),
            'lokasi_nomborpremis_namaprogram' => fake()->name(),
            'namajalan' => fake()->name(),
            'namataman' => fake()->name(),
            'noposkod' => fake()->name(),
            'negeri' => fake()->name(),
            'statuspenerima' => fake()->name(),
            'namapenerima' => fake()->name(),
            'nokadpengenalan_nopassport' => fake()->name(),
            'notelefon' => fake()->name(),
            'emel' => fake()->name(),
            'warganegara' => fake()->name(),
            'kategoripermohonan' => fake()->name(),
            'jenistong' => fake()->name(),
            'jumlahtong' => fake()->name(),
            'nosiritong' => fake()->name(),
            'nosiritonglama' => fake()->name(),
            'kategoripenerimaantong' => fake()->name(),
            'catatan' => fake()->name(),
            'perakuanpenerima' => fake()->name(),
            'gambarpenghantarantong' => fake()->name(),
            'namapekerja' => fake()->name(),
            'nopekerja' => fake()->name(),
            'nolori' => fake()->name(),
            'penghantarantong' => fake()->name()
        ];
    }
}
