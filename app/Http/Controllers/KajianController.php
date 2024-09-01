<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Kajian;
use App\Models\KajianCategory;

class KajianController extends Controller
{
    public function index()
    {
        $data = Kajian::with('category')->paginate(5);

        return view('pages.kajian.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        $categories = KajianCategory::get();
        return view('pages.kajian.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kajian_category_id' => 'required',
            'title' => 'required',
            'start_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $data = $request->except('_token', '_method', 'banner');

        if(!$request->hasFile('banner')) {
            throw ValidationException::withMessages(['banner' => "Banner is required"]);
        }

        $file = $request->banner;
        $extension =  $request->banner->extension();
        $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;

        Storage::putFileAs('public/kajian', $file, $newName);
        $data['banner_url'] = 'kajian/' . $newName;

        Kajian::create($data);

        return redirect()->route('kajian.index')->with('status', 'Kajian berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Kajian::findOrFail($id);
        $categories = KajianCategory::get();

        return view('pages.kajian.edit', [
            'data' => $data,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kajian_category_id' => 'required',
            'title' => 'required',
            'start_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $data = $request->except('_token', '_method', 'banner');

        if($request->hasFile('banner')) {
            $file = $request->banner;
            $extension =  $request->banner->extension();
            $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;
    
            Storage::putFileAs('public/kajian', $file, $newName);
            $data['banner_url'] = 'kajian/' . $newName;         
        }

        $kajian = Kajian::findOrFail($id);
        $kajian->update($data);

        return redirect()->route('kajian.index')->with('status', 'Kajian berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Kajian::findOrFail($id);
        $data->update([
            'deleted_at' => now()
        ]);

        return redirect()->route('kajian.index')->with('status', 'Kajian berhasil dihapus');
    }
}
