<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CompanyInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_informations')->insert([
            'address' => 'Jl. Parkesit Raya No.35-37 Bantarjati, Bogor Utara, Kota Bogor 16153, Jawa Barat, Indonesia',
            'email' => 'info@cintaquran.or.id',
            'phone' => '(0251) 85 717 62',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
            'instagram' => 'instagram.com',
            'linkedin' => 'linkedin.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
