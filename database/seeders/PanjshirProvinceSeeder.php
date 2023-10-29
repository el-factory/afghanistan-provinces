<?php

namespace OpenAfghanistan\Provinces\Database\Seeders;

use Illuminate\Database\Seeder;
use OpenAfghanistan\Provinces\Models\Province;

class PanjshirProvinceSeeder extends Seeder
{
    public function run(): void
    {
        // Create province
        $province = Province::create([
            'name' => 'پنجشير',
            'en_name' => 'Panjshir',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}
