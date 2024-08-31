<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CompanyInformation;

class CompanyInformationController extends Controller
{
    public function index()
    {
        $data = CompanyInformation::first();

        return view('pages.company-information.index', [
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $data = CompanyInformation::findOrFail($id);

        return view('pages.company-information.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $data = $request->except('_token', '_method');

        if ($request->hasFile('logo')) {
            $file = $request->logo;
            $extension =  $request->logo->extension();
            $newName = rand(1, 999) . '-' . date('Ymd-His') . '.' . $extension;
    
            Storage::putFileAs('public/logo', $file, $newName);
            $data['logo'] = 'logo/' . $newName;
        }

        $company = CompanyInformation::findOrFail($id);
        $company->update($data);

        return redirect()->route('information.index')->with('status', 'Informasi yayasan berhasil diperbarui');
    }
}
