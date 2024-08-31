<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $data = Group::paginate(5);

        return view('pages.group.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.group.create');
    }

    public function store(Request $request)
    {
        if(!$request->hasFile('logo')) {
            throw ValidationException::withMessages(['logo' => "Logo is required"]);
        }

        $file = $request->logo;
        $extension =  $request->logo->extension();
        $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;

        Storage::putFileAs('public/logo', $file, $newName);
        $data = [
            'logo' => 'logo/' . $newName
        ];

        Group::create($data);

        return redirect()->route('group.index')->with('status', 'Logo berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $data = Group::findOrFail($id);
        Storage::delete('public/' . $data->image_url);
        Group::destroy($id);

        return redirect()->route('group.index')->with('status', 'Logo berhasil dihapus');
    }
}
