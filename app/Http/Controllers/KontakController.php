<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KontakController extends Controller
{
    public function show()
    {
        $Kontak = Kontak::find(1);
        // return $Kontak;
        return view("dashboard.kontak.edit", [
            'kontak' => $Kontak,
        ]);
    }
    public function update(Request $request)
    {
        $Kontak = Kontak::find(1);
        // return dd($request);
        $rules = [
            'image' => 'image|file|max:2048',
            'email' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Kontak::where('id', $Kontak->id)->update($validatedData);

        return redirect('/dashboard/kontak/edit')->with('success', 'Kontak Updated');
    }
}
