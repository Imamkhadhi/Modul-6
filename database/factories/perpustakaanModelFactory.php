<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class perpustakaanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nama_Perpustakaan' => $this->faker->company(),
            'Alamat' => $this->faker->address(),
            'Nomor_Telepon' => $this->faker->phoneNumber(),
        ];
    }
}
