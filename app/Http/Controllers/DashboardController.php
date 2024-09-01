<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Kajian;
use App\Models\Program;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDonation = Donation::count();
        $totalPrograms = Program::count();
        $totalKajian = Kajian::count();

        return view('pages.dashboard.index', [
            'total_donation' => $totalDonation,
            'total_program' => $totalPrograms,
            'total_kajian' => $totalKajian,
        ]);
    }
}
