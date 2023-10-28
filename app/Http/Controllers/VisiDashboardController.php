<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiDashboardController extends Controller
{
    public function show(VisiMisi $visimisi)
    {
        
        return view("dashboard.visi-misi.edit", [
            'visi' => $visimisi,
        ]);
    }
    public function update(Request $request, VisiMisi $visimisi)
    {
        // return dd($request);
        $rules = [
            'image' => 'image|file|max:1024',
            'visi' => 'required',
            'misi' => 'required'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        VisiMisi::where('id', $visimisi->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Visi Misi Updated');
    }
}
