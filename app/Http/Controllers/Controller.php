<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $req)
    {
        $NPM = $req->input('NPM');
        $nama_mahasiswa = $req->input('nama_mahasiswa');
        $nomor_handphone = $req->input('nomor_handphone');

        $data = array('NPM'=>$NPM, "nama_mahasiswa"=>$nama_mahasiswa, "nomor_handphone"=>$nomor_handphone);

        DB::table('t.mahasiswa')->insert($data);

        echo "Success";
    }
}
