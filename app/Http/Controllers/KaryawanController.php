<?php

namespace App\Http\Controllers;

use App\Models\KaryawanModel;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.karyawan.karyawan',[
            'karyawan' => KaryawanModel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'nama_karyawan' => 'required|max:255',
            'jenis_kelamin' => 'required|min:3|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|min:5|max:255',
            'bagian_kerja' => 'required|min:5|max:255'
        ]);  
        KaryawanModel::create($validateData);
        return redirect()->to('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.karyawan.edit', [
            'karyawan' => KaryawanModel::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            'nama_karyawan' => 'required|max:255',
            'jenis_kelamin' => 'required|min:3|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|min:5|max:255',
            'bagian_kerja' => 'required|min:5|max:255'
        ]);  
        KaryawanModel::where('id',$id)->
                update($validateData);
            return redirect()->to('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KaryawanModel::destroy($id);
        return redirect()->to('/karyawan');
    }
}
