<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KajianCetegorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Perkantoran', 'Online'];

        for ($i = 0; $i < count($data); $i++) {
            DB::table('kajian_categories')->insert([
                'icon' => 'ti-angle-up',
                'name' => $data[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
