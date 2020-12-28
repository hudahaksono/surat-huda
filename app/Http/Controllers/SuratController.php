<?php

namespace App\Http\Controllers;

use App\UnitKerja;
use App\Jabatan;
use App\Pegawai;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $unit_kerja = UnitKerja::all();
        $jabatan = Jabatan::all();
        $pegawai = Pegawai::all();

        return view('index', ['unit_kerja' => $unit_kerja, 'jabatan' => $jabatan, 'pegawai' => $pegawai]);
    }

    public function store(Request $request)
    {

        $date_time = new DateTime;

        $data = $request->all();
        $unit_kerja = $data['unit_kerja'];
        $jabatan_id = $data['jabatan_id'];
        $pegawai_id = $data['pegawai_id'];
        $redaksi = $data['redaksi'];
        $data_kirim = [];

        $data_kirim['jabatan_id'] = $jabatan_id;
        $data_kirim['pegawai_id'] = $pegawai_id;
        $data_kirim['unit_kerja'] = $unit_kerja;
        $data_kirim['redaksi'] = $redaksi;

        $kirim = DataKirim::create($data_kirim);
        $id_kirim = $kirim->id;

        return response()->json(['success' => true]);
    }
}
