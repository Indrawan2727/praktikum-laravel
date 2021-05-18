<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function unggah(Request $req){
        
        $path = $req->file("berkas")->storeAs('berkas',
        $req->file('berkas')->getClientOriginalName(),
        'public');
        return view('hasil-unggah', [
            'path' => $path,
        ]);
    }
}
