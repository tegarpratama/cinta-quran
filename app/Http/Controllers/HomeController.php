<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInformation;
use App\Models\Banner;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $companyInformation = CompanyInformation::first();
        $banner = Banner::first();
        $totalKajian = DB::table('kajian_categories as kc')
            ->leftJoin('kajians as k', 'k.kajian_category_id', 'kc.id')
            ->select('kc.name', DB::raw('COUNT(k.id) as total'))
            ->whereNull('k.deleted_at')
            ->whereNull('kc.deleted_at')
            ->groupBy('kc.id')
            ->get();

        dd($totalKajian);

        return view('welcome', [
            'company_information' => $companyInformation,
            'banner' => $banner
        ]);
    }
}
