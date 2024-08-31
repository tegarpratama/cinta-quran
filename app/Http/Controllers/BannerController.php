<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $data = Banner::paginate(5);

        return view('pages.banner.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.banner.create');
    }

    public function store(Request $request)
    {
        if(!$request->hasFile('banner')) {
            throw ValidationException::withMessages(['banner' => "Banner is required"]);
        }

        $file = $request->banner;
        $extension =  $request->banner->extension();
        $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;

        Storage::putFileAs('public/banner', $file, $newName);
        $data = [
            'image_url' => 'banner/' . $newName
        ];

        Banner::create($data);

        return redirect()->route('banner.index')->with('status', 'Banner berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $data = Banner::findOrFail($id);
        Storage::delete('public/' . $data->image_url);
        Banner::destroy($id);

        return redirect()->route('banner.index')->with('status', 'Banner berhasil dihapus');
    }
}
