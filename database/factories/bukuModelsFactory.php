<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\perpustakaanModel;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class bukuModelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Judul_Buku' => $this->faker->name(),
            'perpustakaan_id' => perpustakaanModel::factory(),
            'Penulis' => $this->faker->name(),
            'Penerbit' => $this->faker->name(),
            'Tahun_Terbit' => $this->faker->name(),

        ];
    }
}
