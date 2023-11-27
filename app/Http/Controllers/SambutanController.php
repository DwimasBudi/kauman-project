<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;
use Illuminate\Support\Facades\Storage;

class SambutanController extends Controller
{
    public function show()
    {
        $sambutan = Sambutan::find(1);
        return view("dashboard.sambutan.edit", [
            'sambutan' => $sambutan,
        ]);
    }
    public function update(Request $request)
    {
        // return dd($request);
        $Sambutan = Sambutan::find(1);
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

        return redirect('/dashboard/sambutan/edit')->with('success', 'Sambutan Updated');
    }
}
