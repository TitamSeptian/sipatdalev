<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12pt;
    }

    .center {
        text-align: center;
    }

    .f-9 {
        font-size: 9pt;
    }

    .f-10 {
        font-size: 10pt;
    }

    .f-11 {
        font-size: 11pt;
    }

    .f-12 {
        font-size: 12pt;
    }

    .f-13 {
        font-size: 13pt;
    }

    .f-14 {
        font-size: 14pt;
    }

    .f-15 {
        font-size: 15pt;
    }

    .f-16 {
        font-size: 16pt;
    }

    table td,
    table td * {
        vertical-align: top;
    }

    p {
        line-height: 1.5;
        align: justify;
        text-align: justify
    }
</style>
<table width="100%" border="0">
    <tr>
        <td width="10%" align="center"><img src="img/logo-kop-surat.png" width="80" height="90"></td>
        <td width="90%" align="center">
            <h3>PEMERINTAH DAERAH PROVINSI JAWA BARAT</h3>
            <h3>BADAN PENDAPATAN DAERAH</h3>
            <br>
            <p class="f-9"> Jl. Soekarno – Hatta No. 528 Bandung Telp. (022) 7566197 – 75662948 Fax. 7564880
                Website :
                www.bapenda.jabarprov.go.id Email : bapenda@jabarprov.go.id</p>
            <p class="f-9"><b>BANDUNG – 40286</b></p>
        </td>
    </tr>
</table>
<hr>
<div class="center">
    <b class="f-16">NOTA DINAS</b>
</div>
<br>
<table width="100%" class="f-12">
    <tr>
        <td width="18%">Kepada</td>
        <td>:</td>
        <td>
            {!! $surat->kepada !!}
        </td>
    </tr>
    <tr>
        <td>Dari</td>
        <td>:</td>
        <td>{{ $surat->dari }}</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td>{{ $tanggal }}</td>
    </tr>
    <tr>
        <td>Nomor</td>
        <td>:</td>
        <td>{{ $surat->no_surat }}</td>
    </tr>
    <tr>
        <td>Sifat</td>
        <td>:</td>
        <td>{{ $surat->sifat }}</td>
    </tr>
    <tr>
        <td>Lampiran</td>
        <td>:</td>
        <td>1 (satu) Berkas</td>
    </tr>
    <tr>
        <td>Hal</td>
        <td>:</td>
        <td>{{ $surat->perihal }}</td>
    </tr>
</table>
<hr>
{!! $surat->kalimat_pembuka !!}
<div class="" style="margin: 0 0 0 10%">
    <table>
        <tr>
            <td>Hari/Tanggal</td>
            <td>:</td>
            <td>
                {{ $surat->hari_tanggal }}
            </td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td>
                {{ $surat->waktu_awal }} sd {{ $surat->waktu_akhir }}
            </td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td>:</td>
            <td>
                {!! $surat->tempat !!}
            </td>
        </tr>
        <tr>
            <td>Agenda</td>
            <td>:</td>
            <td>
                {!! $surat->agenda !!}
            </td>
        </tr>
    </table>
</div>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Mengingat pentingnya acara dimaksud, diharapkan kepala bidang dapat menugaskan ketua tim dan
    pelaksana teknis.
</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Demikian disampaikan, atas perhatian dan kerjsamanya disampaikan
    terima kasih</p>
<br><br>
<div style="text-align: center">
    <div style="width: 50%; text-align: center; float: right;">KEPALA BIDANG PENGENDALIAN DAN EVALUASI PENDAPATAN</div>
    <br>
    <div style="width: 50%; text-align: left; float: right;"></div><br>
    <div style="width: 50%; text-align: left; float: right;"><img style="margin-left: 10px;" src="img/ttd-no-dinas.png"
            alt=""></div>
</div>
{{-- <table>
    <tr>
        <td rowspan="2"></td>
        <td style="max-width: 283px; word-wrap: break-word; float: right;"><span>KEPALA BIDANG PENGENDALIAN DAN EVALUASI
                PENDAPATAN</span>
        </td>
    </tr>
    <tr>
        <td>
            <img src="img/ttd-no-dinas.png" alt="">
        </td>
    </tr>
</table> --}}
