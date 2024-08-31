<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DonationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Kemanusiaan', 'IBBQ', 'Wakaf'];

        for ($i = 0; $i < count($data); $i++) {
            DB::table('categories')->insert([
                'icon' => 'ti-angle-up',
                'name' => $data[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
