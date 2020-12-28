<?php

namespace App\Http\Controllers;

use App\UnitKerja;
use App\Jabatan;
use App\Pegawai;
use App\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $unit_kerja = UnitKerja::all();
        $jabatan = Jabatan::all();
        $pegawai = Pegawai::all();
        $surat = Surat::all();

        return view('index', ['unit_kerja' => $unit_kerja, 'jabatan' => $jabatan, 'pegawai' => $pegawai, 'surat' => $surat]);
    }

    public function store(Request $request)
    {

        $data       = $request->all();
        $unit_kerja = $data['unit_kerja'];
        $jabatan    = $data['jabatan'];
        $pegawai    = $data['pegawai'];
        $redaksi    = $data['redaksi'];
        $data_kirim = [];

        $data_kirim['jabatan'] = $jabatan;
        $data_kirim['pegawai'] = $pegawai;
        $data_kirim['unit_kerja'] = $unit_kerja;
        $data_kirim['redaksi'] = $redaksi;

        $kirim = Surat::create($data_kirim);
        $id_kirim = $kirim->id;

        return redirect('/');

        // return response()->json(['success' => true]);
    }

    public function list_data_kirim(Request $request)
    {
        $columns = array(
            2 => 'jabatan'
        );

        $totalData = DB::table('surat')
            ->count();

        $totalFiltered = $totalData;

        if ($request->input('length') != -1)
            $limit = $request->input('length');
        else
            $limit = $totalData;

        $start = $request->input('start');
        $order = 'jabatan';
        $dir = 'asc';
        if (empty($request->input('search.value'))) {
            $jabatan = DB::table('surat')
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $jabatan =  DB::table('surat')
                ->where([['jabatan', 'LIKE', "%{$search}%"]])
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = DB::table('surat')
                ->where([['jabatan', 'LIKE', "%{$search}%"]])
                ->count();
        }
        $data = array();
        if (!empty($jabatan)) {
            foreach ($jabatan as $key => $item) {
                $nestedData['id'] = $item->id;
                $nestedData['jabatan'] = $item->jabatan;
                $nestedData['pegawai'] = $item->nama_pegawai;
                $nestedData['redaksi'] = $item->redaksi;
                $nestedData['hapus'] = '<a href="javascript:void(0)" id="delete_data" data-toggle="tooltip" title="View" data-id="$item->id" data-original-title="" class="btn btn-danger btn-sm"><i class="dripicons-trash"></i></a>';

                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );

        echo json_encode($json_data);
    }
}
