<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
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

        $data = $request->except('_token', '_method');

        if(!$request->hasFile('icon')) {
            throw ValidationException::withMessages(['icon' => "Icon is required"]);
        }

        $file = $request->icon;
        $extension =  $request->icon->extension();
        $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;

        Storage::putFileAs('public/icon', $file, $newName);
        $data['icon'] = 'icon/' . $newName;

        MiniInformation::create($data);

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

        $data = $request->except('_token', '_method');

        if($request->hasFile('icon')) {
            $file = $request->icon;
            $extension =  $request->icon->extension();
            $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;
    
            Storage::putFileAs('public/icon', $file, $newName);
            $data['icon'] = 'icon/' . $newName;
        }

        $info = MiniInformation::findOrFail($id);
        $info->update($data);

        return redirect()->route('mini.info.index')->with('status', 'Informasi homepage berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = MiniInformation::findOrFail($id);
        $data->destroy($id);

        return redirect()->route('mini.info.index')->with('status', 'Informasi homepage berhasil dihapus');
    }
}
