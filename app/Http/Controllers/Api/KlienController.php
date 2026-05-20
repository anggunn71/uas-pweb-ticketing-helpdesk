<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Klien;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    public function index()
    {
        return response()->json(Klien::all(), 200);
    }

    public function store(Request $request)
    {
        $data = Klien::create($request->all());

        return response()->json([
            'message' => 'Data klien berhasil ditambahkan',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = Klien::find($id);

        if(!$data){
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ],404);
        }

        return response()->json($data,200);
    }

    public function update(Request $request, $id)
    {
        $data = Klien::find($id);

        if(!$data){
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ],404);
        }

        $data->update($request->all());

        return response()->json([
            'message' => 'Data berhasil diupdate'
        ],200);
    }

    public function destroy($id)
    {
        $data = Klien::find($id);

        if(!$data){
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ],404);
        }

        $data->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ],200);
    }
}