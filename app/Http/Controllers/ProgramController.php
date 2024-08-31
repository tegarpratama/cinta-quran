<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $data = Program::paginate(5);

        return view('pages.program.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.program.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        if(!$request->hasFile('banner')) {
            throw ValidationException::withMessages(['banner' => "Banner is required"]);
        }

        $data = $request->except('_token', '_method', 'banner');

        if ($request->hasFile('banner')) {
            $file = $request->banner;
            $extension =  $request->banner->extension();
            $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;
    
            Storage::putFileAs('public/banner', $file, $newName);
            $data['banner_url'] = 'banner/' . $newName;
        }

        Program::create($data);

        return redirect()->route('program.index')->with('status', 'Program berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Program::findOrFail($id);

        return view('pages.program.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $data = $request->except('_token', '_method', 'banner');
        $program = Program::findOrFail($id);

        if ($request->hasFile('banner')) {
            $file = $request->banner;
            $extension =  $request->banner->extension();
            $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;
    
            Storage::delete('public/' . $program->banner_url);
            Storage::putFileAs('public/banner', $file, $newName);
            $data['banner_url'] = 'banner/' . $newName;
        }

        $program->update($data);
        
        return redirect()->route('program.index')->with('status', 'Program berhasil diperbarui');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        Program::destroy($id);
        Storage::delete('public/' . $program->banner_url);

        return redirect()->route('program.index')->with('status', 'Program berhasil dihapus');
    }
}
