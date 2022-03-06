<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KaryawanModel>
 */
class KaryawanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_karyawan'  => $this->faker->name(),
            'jenis_kelamin'  => $this->faker->name(),
            'alamat'  => $this->faker->name(),
            'no_telp'  => $this->faker->name(),
            'bagian_kerja'  => $this->faker->name()
        ];
    }
}
