<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KajianCategory;

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

        KajianCategory::create($validated);

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

        $data = KajianCategory::findOrFail($id);
        $data->update($validated);

        return redirect()->route('category.kajian.index')->with('status', 'Kategori kajian berhasil diperbarui');
    }

    public function destroy($id)
    {
        $teacher = KajianCategory::findOrFail($id);
        $teacher->update([
            'deleted_at' => now()
        ]);

        return redirect()->route('category.kajian.index')->with('status', 'Kategori kajian berhasil dihapus');
    }
}
