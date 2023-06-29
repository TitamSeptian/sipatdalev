<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratNoDinasController extends Controller
{
    public function create()
    {
        return view('admin.surat.create_no_dinas');
    }
}
