<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function input() {
        return view('formulir');
    }

    public function create(Request $request) {

        // return $request->file('image')->store(('post-images'));
        $validateData = $request->validate([
            'pasien' => 'required | min:5 | max:255',
            'dokter' => 'required | min:5 | max:255',
            'kondisi' => 'required | min:5 | max:255',
            'suhu' => 'required | numeric | between:35.00,45.50',
            'resep' => 'required | image | mimes:jpeg,png,jpg.pdf | max:2048',
        ]);

        if($request->file('image')) {
            $validateData['resep'] = $request->file('image')->store('images-store');
        }

        History::create($validateData);

        return redirect('/dashboard')->with('status', 'Rekam medis pasien berhasil ditambah!');
    }
}
