<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\DaftarVaksinasi;
class DaftarVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set validasion
        $validator = Validator::make($request->all(), [
            'id_user'       =>'required',
            'id_vaksinasi'  =>'required',
            'nik'           =>'required',
            'alamat'        =>'required',
            'tanggal_lahir' =>'required',
            'nama'          =>'required',
            'email'         =>'required',
            'no_telp'       =>'required',
            'foto_ktp'      =>'required',
        ]);
        
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $DaftarVaksinasi = DaftarVaksinasi::create([
            'id_user'       => $request->id_user,
            'id_vaksinasi'  => $request->id_vaksinasi,
            'nik'           => $request->nik,
            'alamat'        => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama'          => $request->nama,
            'email'         => $request->email,
            'no_telp'       => $request->no_telp,
            'foto_ktp'      => $request->foto_ktp,
        ]);

        //success save to database
        if($DaftarVaksinasi) {

            return response()->json([
                'success' => true,
                'message' => 'Data Vaksin Telah Dibuat',
                'data'    => $DaftarVaksinasi  
            ], 201);

        } 

        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Gagal Menambahkan Data',
        ], 500);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
