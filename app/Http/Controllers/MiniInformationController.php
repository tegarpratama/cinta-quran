<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MiniInformation;

class MiniInformationController extends Controller
{
    public function index()
    {
        $data = MiniInformation::get();

        return view('pages.mini-information.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.mini-information.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        MiniInformation::create($validated);

        return redirect()->route('mini.info.index')->with('status', 'Informasi homepage berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = MiniInformation::findOrFail($id);

        return view('pages.mini-information.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = MiniInformation::findOrFail($id);
        $data->update($validated);

        return redirect()->route('mini.info.index')->with('status', 'Informasi homepage berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = MiniInformation::findOrFail($id);
        $data->destroy($id);

        return redirect()->route('mini.info.index')->with('status', 'Informasi homepage berhasil dihapus');
    }
}
