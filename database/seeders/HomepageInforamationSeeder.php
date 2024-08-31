<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HomepageInforamationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ['Zakat 100%', 'Barang Berkah', 'Amazing Box'];
        $description = ['Tunaikan zakat anda melalui program zakat 100% amanah', 'Yuk berikan barang bekas yang masih layak pakai untuk sahabat kita', 'Isi penuh amazing box selama 1 bulan, kembalikan kepada kami'];

        for ($i = 0; $i < count($title); $i++) {
            DB::table('homepage_informations')->insert([
                'icon' => 'ti-angle-up',
                'title' => $title[$i],
                'description' => $description[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
