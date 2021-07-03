<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::latest()->paginate(10);
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'alamat'    => 'required',
            'NIP'       => 'required'
        ]);

        $pegawai = Pegawai::create([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'NIP'       => $request->NIP
        ]);

        if($pegawai){
            //redirect dengan pesan sukses
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'alamat'    => 'required',
            'NIP'       => 'required'
        ]);

        //get data Pegawai by ID
        $pegawai = Pegawai::findOrFail($pegawai->id);

        $pegawai->update([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'NIP'       => $request->NIP
        ]);

        if($pegawai){
            //redirect dengan pesan sukses
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        if($pegawai){
            //redirect dengan pesan sukses
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
