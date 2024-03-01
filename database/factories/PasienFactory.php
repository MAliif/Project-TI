<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name,
            'jenis_kelamin' => Arr::random(['Laki-laki', 'Perempuan']),
            'alamat' => fake()->address,
            'no_tlp' => mt_rand(0000001, 9999999),
            'noreg' => mt_rand(0000001, 9999999)
        ];
    }
}
