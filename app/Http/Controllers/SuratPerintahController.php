<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\SuratPerintah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use ZanySoft\LaravelPDF\PDF;

class SuratPerintahController extends Controller
{
    public function index()
    {
        $surat = SuratPerintah::all();
        return view('admin.surat.perintah.index', [
            'surat' => $surat
        ]);
    }
    public function create()
    {
        $employees = Employee::all();

        return view('admin.surat.perintah.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_surat' => 'required',
            'perihal' => 'required',
            'tanggal' => 'required',
            'pegawai' => 'required',
        ], [
            'no_surat.required' => 'No Surat tidak boleh kosong',
            'perihal.required' => 'Perihal tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'pegawai.required' => 'Pegawai tidak boleh kosong',
        ]);

        $surat = SuratPerintah::create([
            'no_surat' => $request->no_surat,
            'perihal' => $request->perihal,
            'tanggal' => $request->tanggal,
            'employee_id' => $request->pegawai,
        ]);

        return redirect()->route('perintah.index')->with('success', 'Surat Perintah berhasil ditambahkan');
    }

    public function show($id)
    {
        $surat = SuratPerintah::findOrFail($id);
        $pdf = new PDF([
            'title' => $surat->no_surat,
            'format' => 'A4',
            'mode' => 'c',
            'orientation' => 'P',
            'margin_left' => 22,
            'margin_right' => 22,
            'margin_top' => 14,
            'margin_bottom' => 0,
        ]);
        \Date::setLocale('id');
        $tanggal = \Date::parse($surat->tanggal)->format('j F Y');
        $pdf->loadView('pdf.perintah', [
            'surat' => $surat,
            'tanggal' => $tanggal
        ], [], []);
        return $pdf->stream($surat->no_surat . '.pdf');
    }
    public function download($id)
    {
        $surat = SuratPerintah::findOrFail($id);
        $pdf = new PDF([
            'title' => $surat->no_surat,
            'format' => 'A4',
            'mode' => 'c',
            'orientation' => 'P',
            'margin_left' => 22,
            'margin_right' => 22,
            'margin_top' => 14,
            'margin_bottom' => 0,
        ]);
        \Date::setLocale('id');
        $tanggal = \Date::parse($surat->tanggal)->format('j F Y');
        $pdf->loadView('pdf.perintah', [
            'surat' => $surat,
            'tanggal' => $tanggal
        ], [], []);
        return $pdf->download($surat->no_surat . '.pdf');
    }
}
