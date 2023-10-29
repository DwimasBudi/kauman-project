<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;
use Illuminate\Support\Facades\Storage;

class SambutanController extends Controller
{
    public function show(Sambutan $Sambutan)
    {

        return view("dashboard.sambutan.edit", [
            'sambutan' => $Sambutan,
        ]);
    }
    public function update(Request $request, Sambutan $Sambutan)
    {
        // return dd($request);
        $rules = [
            'image' => 'image|file|max:2048',
            'sambutan' => 'required',
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Sambutan::where('id', $Sambutan->id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Sambutan Updated');
    }
}
