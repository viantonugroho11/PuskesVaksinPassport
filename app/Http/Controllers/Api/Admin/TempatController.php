<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tempat;
use Illuminate\Support\Facades\Validator;
class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //get data from table posts
        $tempat = Tempat::latest()->get();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Tempat',
            'data'    => $tempat,  
        ], 200);
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
            'nama'   => 'required',
            'alamat' => 'required',
            'koordinat' => 'required',
            'foto' => 'required',
        ]);
        
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $tempat = Tempat::create([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'koordinat'   => $request->koordinat,
            'foto'   => $request->foto,
        ]);

        //success save to database
        if($tempat) {

            return response()->json([
                'success' => true,
                'message' => 'Data Tempat Telah Dibuat',
                'data'    => $tempat  
            ], 201);

        } 

        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Gagal Menambahkan Data Tempat Vaksin',
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
    public function update(Request $request, Tempat $tempat)
    {
        //set validasion
        $validator = Validator::make($request->all(), [
            'nama'   => 'required',
            'alamat' => 'required',
            'koordinat' => 'required',
            'foto' => 'required',
        ]);
        
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //find post by ID
        $tempat = Tempat::findOrFail($tempat->id);

        if($tempat) {

            //update post
            $tempat->update([
                'nama'     => $request->nama,
                'alamat'   => $request->alamat,
                'koordinat'   => $request->koordinat,
                'foto'   => $request->foto,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data Tempat Di update',
                'data'    => $tempat  
            ], 200);

        }

        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Data Tempat Tidak ada',
        ], 404);
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
