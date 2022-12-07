<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\obat;
use App\Http\Controllers\pabrik;

class ObatController extends Controller
{
    public function index(){

        $data_obat = Obat::with('pabrik')->get();
        $data_pabrik = Pabrik::with('obat')->get();
        return view('obat.all'('data_obat','data_pabrik'));
    }
    public function show (Obat $obat){
        return view('obat.detail',[
            "obat" => $obat
        ]);
    }
    public function create (){
        return view('obat.create',[
            "pabrik" => Pabrik::all()
        ]);
    }
    public function store (Request $request) {
        $validateData = $request->validate([
                'pabrik_id' => 'required',
                'kode_obat' => 'required|unique:obats',
                'nama_obat' => 'required|max:255',
                'birthday' => 'required|date_format:Y-m-d',
                'email' => 'required',
                'alamat' => 'required',
            ]);

            obat::create($validateData);
            return redirect('/obat/all')->with('Successfully','obat Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Obat $obat){
        obat::destroy($obat->id);
        return redirect('/obat/all' )-> with('Successfully','Data berhasil dihapus !');
    }

    public function edit (Obat $obat) {
        return view('obat.edit', [
            'pabrik' => Pabrik::all(),
            'obat'=>$obat
        ]);
    }

    public function update (Request $request, obat $obat) {
        $rules =[
                'dokter_id' => 'required',
                'nama_obat' => 'required|max:255',
                'birthday' => 'required|date_format:d-m-Y',
                'email' => 'required',
                'alamat' => 'required',
        ];

            $validateData = $request->validate($rules);
            obat::where('id', $obat->id)->update($validateData);
            return redirect('/obat/all')->with('Successfully','Data Berhasil DiUbah !');
    }
}
