<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function list(){
        $hasil = DB::select('select * from stok');
        return view('list-stok',['data' => $hasil]);
    }
    public function tambah(Request $req){
        DB::insert('insert into stok(merk,nama,harga) ' .
        'value(?,?,?)', [$req->merk,$req->tipe,$req->harga]);

        $hasil = DB::select('select * from stok');
        return view('list-stok',['data' => $hasil]);
        
    }
    public function hapus($req){
        DB::delete('delete from stok where id=?',
        [$req]);
        
        $hasil = DB::select('select * from stok');
        return view('list-stok',['data' => $hasil]);
    }
    public function ubah($req){
       $hasil = DB::select('select * from stok where id=?',[$req]);
       return view('form-ubah', ['data'=> $hasil]);
    }
    public function simpan(Request $req){
        $hasil = DB::update('update stok set ' .
        'merk=?, nama=?, harga=? ' .
        'where id=?', [$req->merk,$req->tipe,$req->harga,$req->id]);

        return $this->list();
    }
}

