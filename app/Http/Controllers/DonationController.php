<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Donation;
use App\Models\DonationCategory;

class DonationController extends Controller
{
    public function index()
    {
        $data = Donation::with('category')->paginate(5);

        return view('pages.donation.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        $categories = DonationCategory::get();
        return view('pages.donation.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'due_date' => 'required',
            'max_fund' => 'required',
        ]);

        $data = $request->except('_token', '_method', 'image');

        if(!$request->hasFile('image')) {
            throw ValidationException::withMessages(['image' => "Image is required"]);
        }

        $file = $request->image;
        $extension =  $request->image->extension();
        $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;

        Storage::putFileAs('public/donation', $file, $newName);
        $data['image_url'] = 'donation/' . $newName;

        Donation::create($data);

        return redirect()->route('donation.index')->with('status', 'Donasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Donation::findOrFail($id);
        $categories = DonationCategory::get();

        return view('pages.donation.edit', [
            'data' => $data,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'due_date' => 'required',
            'max_fund' => 'required',
        ]);

        $data = $request->except('_token', '_method', 'image');

        if($request->hasFile('image')) {
            $file = $request->image;
            $extension =  $request->image->extension();
            $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;
    
            Storage::putFileAs('public/donation', $file, $newName);
            $data['image_url'] = 'donation/' . $newName;         
        }

        $donation = Donation::findOrFail($id);
        $donation->update($data);

        return redirect()->route('donation.index')->with('status', 'Donasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Donation::findOrFail($id);
        $data->update([
            'deleted_at' => now()
        ]);

        return redirect()->route('donation.index')->with('status', 'Donasi berhasil dihapus');
    }
}
