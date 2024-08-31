<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationCategory;

class DonationCategoryController extends Controller
{
    public function index()
    {
        $data = DonationCategory::paginate(5);

        return view('pages.donation-category.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.donation-category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'name' => 'required',
        ]);

        DonationCategory::create($validated);

        return redirect()->route('category.donation.index')->with('status', 'Kategori donasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = DonationCategory::findOrFail($id);

        return view('pages.donation-category.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'name' => 'required',
        ]);

        $data = DonationCategory::findOrFail($id);
        $data->update($validated);

        return redirect()->route('category.donation.index')->with('status', 'Kategori donasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = DonationCategory::findOrFail($id);
        $data->update([
            'deleted_at' => now()
        ]);

        return redirect()->route('category.donation.index')->with('status', 'Kategori donasi berhasil dihapus');
    }
}
