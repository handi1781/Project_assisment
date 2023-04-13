<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass= Kelas::paginate(10);
        return response()->json([
            'data'=> $kelass
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function store(Request $request)
    {
        $kelass = Kelas::create([
            'nama_kelas'=>$request->nama_kelas,
            'nama_siswa1'=>$request->nama_siswa1,
            'nama_siswa2'=>$request->nama_siswa2,
            'nama_siswa3'=>$request->nama_siswa3,
        ]);
        return response()->json([
            'data'=> $kelass
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(kelas $kelass)
    {
        return response()->json([
            'data'=> $kelass
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
 
    public function update(Request $request, kelas $kelass)
    {
        $kelass-> nama_kelas= $request->nama_kelas;
        $kelass-> nama_siswa1= $request->nama_siswa1;
        $kelass-> nama_siswa2= $request->nama_siswa2;
        $kelass-> nama_siswa3= $request->nama_siswa3;
        $kelass->save();

        return response()->json([
            'data'=>$kelass
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas $kelas)
    {
        //
    }
}
