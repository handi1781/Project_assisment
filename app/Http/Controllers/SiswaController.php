<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa= Siswa::paginate(10);
        return response()->json([
            'data'=> $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siswa = Siswa::create([
            'nama_siswa'=>$request->nama_kelas,
            'nilai_mata_pelajaran'=>$request ->nilai_mata_pelajaran,
            'nilai_latihan1'=>$request->nilai_latihan1,
            'nilai_latihan2'=>$request->nilai_latihan2,
            'nilai_latihan3'=>$request->nilai_latihan3,
            'nilai_latihan4'=>$request->nilai_latihan4,
            'nilai_harian'=>$request ->nilai_harian,
            'nilai_UTS'=>$request ->nilai_UTS,
            'nilai_UAS'=>$request ->nilai_UAS,
        ]);
        return response()->json([
            'data'=> $siswa
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        return response()->json([
            'data'=> $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
   
}
