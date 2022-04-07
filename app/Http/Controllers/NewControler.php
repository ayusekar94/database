<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model1;

class NewControler extends Controller
{
    //
    public function home()
    {
        return view('home',[
            'title' => "Home"
        ]);
    }

    public function about()
    {
        $data=array(
            'title' => "About",
            'nama' => model1::getNama(),
            'np' => model1::getNp(2),
            'ttl' => model1::getTtl(),
            'umur' => model1::getUmur(),
            'jk' => model1::getJk(),
            'gd' => model1::getGd(),
            'alamat' => model1::getAlamat(),
            'p' => model1::getPekerjaan(),
            'k' => model1::getK()
        );
        return view('about', $data);
    }

    public function pesan()
    {
        return view('pesan',[
            'title' => "Pesan"
        ]);
    }
}
