<?php

namespace App\Http\Controllers;

use App\Models\KategoriMasalah;
use Illuminate\Http\Request;

class KategoriMasalahController extends Controller
{
    public function index()
    {
        $data = KategoriMasalah::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kategori masalah berhasil ditampilkan',
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kategori = KategoriMasalah::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori masalah berhasil ditambahkan',
            'data' => $kategori
        ], 201);
    }

    public function show($id)
    {
        $kategori = KategoriMasalah::find($id);

        if (!$kategori) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kategori masalah tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $kategori
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriMasalah::find($id);

        if (!$kategori) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kategori masalah tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kategori->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori masalah berhasil diperbarui',
            'data' => $kategori
        ], 200);
    }

    public function destroy($id)
    {
        $kategori = KategoriMasalah::find($id);

        if (!$kategori) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kategori masalah tidak ditemukan'
            ], 404);
        }

        $kategori->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Kategori masalah berhasil dihapus'
        ], 200);
    }
}
