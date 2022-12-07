<?php

namespace App\Http\Controllers;

use App\Models\Pabrik;
use App\Models\Obat;
use Illuminate\Http\Request;

class PabrikController extends Controller
{
    public function index()
    {

        $data_obat = Obat::with('dokter')->get();
        $data_pabrik = Pabrik ::with('obat')->get();
        return view('pabrik.all',compact('data_pabrik','data_obat'));
    }
    public function show (Pabrik $pabrik){
        return view('pabrik.detail',[
            "pabrik" => $pabrik
        ]);
    }
    public function create (){
        return view('pabrik.create',[
            "pabrik" => Pabrik::all()
        ]);
    }
    public function store (Request $request) {
        $validateData = $request->validate([
                'telpon_pabrik' => 'required|unique:pabrik',
                'nama_pabrik' => 'required|max:255',
                'alamat_pabrik' => 'required',
                'email_pabrik' => 'required',
                'produk' => 'required',
            ]);

            Pabrik::create($validateData);
            return redirect('/pabrik/all')->with('Successfully','pabrik Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Pabrik $pabrik){
        Pabrik::destroy($pabrik->id);
        return redirect('/pabrik/all' )-> with('Successfully','Data berhasil dihapus !');
    }

    public function edit (Pabrik $pabrik) {
        return view('pabrik.edit', [
            'pabrik'=>$pabrik
        ]);
    }

    public function update (Request $request, Pabrik $pabrik) {
        $rules =[
            'nama_pabrik' => 'required|max:255',
            'alamat_pabrik' => 'required',
            'email_pabrik' => 'required',
            'produk' => 'required',
        ];

            $validateData = $request->validate($rules);
            Pabrik::where('id', $pabrik->id)->update($validateData);
            return redirect('/pabrik/all')->with('Successfully','Data Berhasil DiUbah !');
    }
}
