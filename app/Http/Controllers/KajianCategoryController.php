<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\KajianCategory;
use App\Models\Kajian;

class KajianCategoryController extends Controller
{
    public function index()
    {
        $data = KajianCategory::paginate(5);

        return view('pages.kajian-category.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.kajian-category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'name' => 'required',
        ]);

        $data = $request->except('_token', '_method');

        if(!$request->hasFile('icon')) {
            throw ValidationException::withMessages(['icon' => "Icon is required"]);
        }

        $file = $request->icon;
        $extension =  $request->icon->extension();
        $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;

        Storage::putFileAs('public/icon', $file, $newName);
        $data['icon'] = 'icon/' . $newName;

        KajianCategory::create($data);

        return redirect()->route('category.kajian.index')->with('status', 'Kategori kajian berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = KajianCategory::findOrFail($id);

        return view('pages.kajian-category.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'name' => 'required',
        ]);

        $data = $request->except('_token', '_method');

        if($request->hasFile('icon')) {
            $file = $request->icon;
            $extension =  $request->icon->extension();
            $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;
    
            Storage::putFileAs('public/icon', $file, $newName);
            $data['icon'] = 'icon/' . $newName;
        }

        $category = KajianCategory::findOrFail($id);
        $category->update($data);

        return redirect()->route('category.kajian.index')->with('status', 'Kategori kajian berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = KajianCategory::findOrFail($id);
        $donations = Kajian::where('kajian_category_id', $id)->count();

        if ($donations > 0) {
            return redirect()->back()->with('error', 'Kategori kajian tidak dihapus, harap hapus kajian terlebih dahulu');
        }

        $data->update([
            'deleted_at' => now()
        ]);

        return redirect()->route('category.kajian.index')->with('status', 'Kategori kajian berhasil dihapus');
    }
}
