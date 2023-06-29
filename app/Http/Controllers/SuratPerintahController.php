<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratPerintahController extends Controller
{
    public function create(){
        return view('admin.surat.create_perintah');
    }
}
