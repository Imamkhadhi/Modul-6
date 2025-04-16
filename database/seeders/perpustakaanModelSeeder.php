<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\perpustakaanModel;
use App\Models\bukuModels;






class perpustakaanModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        perpustakaanModel::factory(5)
            ->has(bukuModels::factory(5))
            ->create();
    }
}
