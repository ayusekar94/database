<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        return view('about',[
            'title' => 'about',
            'nama' => 'Ananda Ayu Sekar',
            'np' => 'Sekar',
            'ttl' => '18 Juni 2002',
            'umur' => '19',
            'jk' => 'Perempuan',
            'gd' => 'A',
            'alamat' => 'Jl.M.T Haryono',
            'p' => 'Mahasiswa',
            'k' => 'Indonesia'
        ]);
    }
}
