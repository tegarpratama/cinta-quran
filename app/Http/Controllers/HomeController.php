<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\CompanyInformation;
use App\Models\Banner;
use App\Models\DonationCategory;
use App\Models\Donation;
use App\Models\MiniInformation;
use App\Models\Group;
use App\Models\Program;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $companyInformation = CompanyInformation::first();
        $banner = Banner::first();
        $totalKajian = DB::table('kajian_categories as kc')
            ->leftJoin('kajians as k', 'k.kajian_category_id', 'kc.id')
            ->select('kc.name', 'kc.icon', DB::raw('COUNT(k.id) as total'))
            ->whereNull('k.deleted_at')
            ->whereNull('kc.deleted_at')
            ->groupBy('kc.id')
            ->limit(3)
            ->get();

        $categoryDonation = DonationCategory::limit(3)->get();
        $donation = Donation::with('category')->limit(3)->get();

        foreach($donation as $d) {
            $dueDate = Carbon::parse($d->due_date);
            $now = Carbon::now();
        
            $daysLeft = $dueDate->diffInDays($now);
        
            if ($now->lt($dueDate)) {
                $message = "{$daysLeft} hari lagi";
            } else {
                $message = "Jatuh tempo";
            }

            $d->expired = $message;
        }

        $miniInfo = MiniInformation::limit(3)->get();
        $group = Group::get();
        $mainProgram = Program::whereNotNull('position')->limit(2)->get();
        $programs = Program::whereNull('position')->limit(3)->get();
        // dd($programs);


        return view('welcome', [
            'company_information' => $companyInformation,
            'banner' => $banner,
            'totalKajian' => $totalKajian,
            'categoryDonation' => $categoryDonation,
            'donation' => $donation,
            'miniInfo' => $miniInfo,
            'group' => $group,
            'mainProgram' => $mainProgram,
            'programs' => $programs,
        ]);
    }
}
