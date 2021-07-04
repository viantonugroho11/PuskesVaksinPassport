<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vaksinasi;
class VaksinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data from table posts
        $vaksinasis = Vaksinasi::latest()->get();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Vaksinasi',
            'data'    => $vaksinasis,  
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
            'id_tempat' => 'required',
            'stok' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);
        
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $vaksinasi = Vaksinasi::create([
            'nama'     => $request->nama,
            'id_tempat'   => $request->id_tempat,
            'stok'   => $request->stok,
            'tanggal'   => $request->tanggal,
            'jam_mulai'   => $request->jam_mulai,
            'jam_selesai'   => $request->jam_selesai,
        ]);

        //success save to database
        if($vaksinasi) {

            return response()->json([
                'success' => true,
                'message' => 'Data Vaksin Telah Dibuat',
                'data'    => $vaksinasi  
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
    public function update(Request $request, Vaksinasi $vaksinasi)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'nama'   => 'required',
            'id_tempat' => 'required',
            'stok' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);
        
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //find post by ID
        $vaksinasi = Vaksinasi::findOrFail($vaksinasi->id);

        if($vaksinasi) {

            //update post
            $vaksinasi->update([
                'nama'     => $request->nama,
                'id_tempat'   => $request->id_tempat,
                'stok'   => $request->stok,
                'tanggal'   => $request->tanggal,
                'jam_mulai'   => $request->jam_mulai,
                'jam_selesai'   => $request->jam_selesai,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data Vaksinasi Di update',
                'data'    => $vaksinasi  
            ], 200);

        }

        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Data Vaksinasi Tidak ada',
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
        //find post by ID
        $vaksinasi = Vaksinasi::findOrfail($id);

        if($vaksinasi) {

            //delete post
            $post->delete();

            return response()->json([
                'success' => true,
                'message' => 'Post Deleted',
            ], 200);

        }

        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Post Not Found',
        ], 404);
    }
}
