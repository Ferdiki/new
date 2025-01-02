<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title'=>'List Penduduk',
            'penduduks'=>Penduduk::get()
        ];
        return view('admin.penduduk.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data =[
            'title'=>'Create Penduduk'
        ];
        return view('admin.penduduk.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required|min:15|max:16',
            'nama'=>'required',
            'status'=>'required',
            'pekerjaan'=>'required',
            'nama_ibu'=>'required',
            'nama_ayah'=>'required',
            'no_kk'=>'required|min:15|max:16',
            'nm_kepala_kel'=>'required'
        ]);

        $save=Penduduk::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'status'=>$request->status,
            'pendidikan_akhir'=>$request->pendidikan_akhir,
            'pekerjaan'=>$request->pekerjaan,
            'nama_ibu'=>$request->nama_ibu,
            'nama_ayah'=>$request->nama_ayah,
            'nm_kepala_kel'=>$request->nm_kepala_kel,
            'no_kk'=>$request->no_kk,
            'alamat'=>$request->alamat
        ]);
        if($save){
            return redirect()->route('penduduk.index')->with('success','Data berhasil ditambahkan');
        }else{
            return redirect()->route('penduduk.index')->with('failed','Data gagal ditambahkan');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        $data = [
            'title'=>'Detail penduduk',
            'penduduk'=>$penduduk
        ];
        return view('admin.penduduk.details',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'nik'=>'required|min:15|max:16',
            'nama'=>'required',
            'status'=>'required',
            'pekerjaan'=>'required',
            'nama_ibu'=>'required',
            'nama_ayah'=>'required',
            'no_kk'=>'required|min:15|max:16',
            'nm_kepala_kel'=>'required'
        ]);

        $update=Penduduk::where('id',$penduduk->id)->update([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'status'=>$request->status,
            'pendidikan_akhir'=>$request->pendidikan_akhir,
            'pekerjaan'=>$request->pekerjaan,
            'nama_ibu'=>$request->nama_ibu,
            'nama_ayah'=>$request->nama_ayah,
            'nm_kepala_kel'=>$request->nm_kepala_kel,
            'no_kk'=>$request->no_kk,
            'alamat'=>$request->alamat
        ]);
        if($update){
            return redirect()->route('penduduk.index')->with('success','Data berhasil diupdate');
        }else{
            return redirect()->route('penduduk.index')->with('failed','Data gagal diupdate');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penduduk $penduduk)
    {
        $delete = $penduduk->delete();
        if($delete){
            return redirect()->route('penduduk.index')->with('success','Data berhasil dihapus');
        }else{
            return redirect()->route('penduduk.index')->with('failed','Data gagal dihapus');

        }
    }
}
