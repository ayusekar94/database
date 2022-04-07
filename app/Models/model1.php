<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class model1 extends Model
{
    public static function getNama()
    {
        return $nama = "Ananda Ayu Sekar Wiranti";
    }

    public static function getNp($id)
    {
        if($id === 1)
        {
            $np="Ayu";
        }else{
            $np="Sekar";
        }
        return $np;
    }

    public static function getTtl()
    {
        return $ttl = "Malang, 18 Juni 2002";
    }

    public static function getUmur()
    {
        $umur = collect([1,2,3,4,4,5]);
        return $umur->sum();
    }

    public static function getJk()
    {
        return $jk = "Perempuan";
    }

    public static function getGd()
    {
        return $gd = "A";
    }

    public static function getAlamat()
    {
        return $alamat = "Jl.M.T Haryono 194-B";
    }

    public static function getPekerjaan()
    {
        return $p = "Mahasiswa";
    }

    public static function getK()
    {
        return $k = "Indonesia";
    }
}
