<?php

namespace App\Http\Controllers;

use App\Models\SuratNoDinas;
use Illuminate\Http\Request;
use ZanySoft\LaravelPDF\PDF;

class SuratNoDinasController extends Controller
{
    public function index()
    {
        $surat = SuratNoDinas::all();
        return view('admin.surat.no_dinas.index', compact('surat'));
    }

    public function create()
    {
        return view('admin.surat.no_dinas.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'no_surat' => 'required',
                'kepada' => 'required',
                'dari' => 'required',
                'tanggal' => 'required',
                'sifat' => 'required',
                'perihal' => 'required',
                'kalimat_pembuka' => 'required',
                'hari_tanggal' => 'required',
                'waktu_awal' => 'required',
                'waktu_akhir' => 'required',
                'tempat' => 'required',
                'agenda' => 'required',
            ],
            [
                'no_surat.required' => 'No Surat tidak boleh kosong',
                'kepada.required' => 'Kepada tidak boleh kosong',
                'dari.required' => 'Dari tidak boleh kosong',
                'tanggal.required' => 'Tanggal tidak boleh kosong',
                'sifat.required' => 'Sifat tidak boleh kosong',
                'perihal.required' => 'Perihal tidak boleh kosong',
                'kalimat_pembuka.required' => 'Kalimat Pembuka tidak boleh kosong',
                'hari_tanggal.required' => 'Hari Tanggal tidak boleh kosong',
                'waktu_awal.required' => 'Waktu Awal tidak boleh kosong',
                'waktu_akhir.required' => 'Waktu Akhir tidak boleh kosong',
                'tempat.required' => 'Tempat tidak boleh kosong',
                'agenda.required' => 'Agenda tidak boleh kosong',
            ]
        );
        $surat = SuratNoDinas::create([
            'no_surat' => $request->no_surat,
            'kepada' => $request->kepada,
            'dari' => $request->dari,
            'tanggal' => $request->tanggal,
            'sifat' => $request->sifat,
            'perihal' => $request->perihal,
            'kalimat_pembuka' => $request->kalimat_pembuka,
            'hari_tanggal' => $request->hari_tanggal,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir,
            'tempat' => $request->tempat,
            'agenda' => $request->agenda,
        ]);
        return redirect()->route('no_dinas.index')->with('success', 'surat nota dinas berhasil ditambahan');
    }

    public function show($id)
    {
        $surat = SuratNoDinas::find($id);
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
        $pdf->loadView('pdf.no_dinas', [
            'surat' => $surat,
            'tanggal' => $tanggal,
        ], [], []);
        return $pdf->stream($surat->no_surat . '.pdf');
    }

    public function destroy($id)
    {
        $surat = SuratNoDinas::find($id);
        $surat->delete();
        return redirect()->route('no_dinas.index')->with('success', 'Data surat berhasil dihapus');
    }

    public function download($id)
    {
        $surat = SuratNoDinas::find($id);
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
        $pdf->loadView('pdf.no_dinas', [
            'surat' => $surat,
            'tanggal' => $tanggal,
        ], [], []);
        return $pdf->download($surat->no_surat . '.pdf');
    }
}
