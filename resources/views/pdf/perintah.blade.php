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
        text-align: justify;
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
    <u><b class="f-16">Surat Perintah</b></u><br>
    <span class="f-12">Nomor : {{ $surat->no_surat }}</span>
</div>
<table width="100%" class="f-12">
    <tr>
        <td width="18%">Dasar</td>
        <td>:</td>
        <td>
            <ol>
                <li>Peraturan Pemerintah Republik Indonesia Nomor 60 Tahun 2008 Tentang Sistem Pengendalian Intern
                    Pemerintah
                </li>
                <li>Peraturan Gubernur Jawa Barat Nomor 10 Tahun 2011 Tentang Penyelenggaraan Sistem Pengendalian Intern
                    di Lingkungan Pemerintah Provinsi Jawa Barat</li>
                <li>Peraturan Gubernur Jawa Barat Nomor 80 Tahun 2016 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit
                    dan Tata Kerja Badan Pendapatan Daerah Provinsi Jawa Barat</li>
            </ol>
        </td>
    </tr>
</table>
<br>
<div class="center">
    <b class="f-12">KEPALA BADAN PENDAPATAN DAERAH PROVINSI JAWA BARAT</b><br>
    <B>MEMERINTAHKAN :</B>
</div>
<br>
<table>
    <tr>
        <td width="18%">Kepada</td>
        <td>:</td>
        <td>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $surat->employee->name }}</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{ $surat->employee->nip }}</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>{{ $surat->employee->position }}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br>
<table width="100%" class="f-12">
    <tr>
        <td width="18%">Dasar</td>
        <td>:</td>
        <td>
            {!! $surat->perihal !!}
        </td>
    </tr>
</table>
<br>
<br>
<div style="text-align: center">
    <div style="width: 50%; text-align: center; float: right;">Ditetapkan di : Bandung</div><br>
    <div style="width: 50%; text-align: center; float: right;">Pada Tanggal : {{ $tanggal }}</div>
    <br>
    <div style="width: 50%; text-align: center; float: right;">KEPALA BIDANG PENGENDALIAN DAN EVALUASI PENDAPATAN</div>
    <br>
    <div style="width: 50%; text-align: left; float: right;"></div><br>
    <div style="width: 50%; text-align: left; float: right;"><img style="margin-left: 10px;" src="img/ttd-perintah.png"
            alt=""></div>
</div>
