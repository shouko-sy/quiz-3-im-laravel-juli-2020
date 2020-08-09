<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(){
        return view('layouts.create');
    }

    public function store(Request $request){
        $query = DB::table('proyek')->insert([
            "namaProyek"=>$request['namaProyek'],
            "deskripsiProyek"=>$request['deskripsiProyek']
        ]);

        return redirect('/items')->with('success', 'Proyek Berhasil Disimpan');
    }

    public function index(){
        return view('');
    }

    public function show(){
        return view('');
    }

    public function edit(){
        return view('');
    }

    public function destroy(){
        return view('');
    }
}
