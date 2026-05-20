<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use Illuminate\Http\Request;

class AgenController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Data agen berhasil ditampilkan',
            'data' => Agen::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_agen' => 'required',
            'email' => 'required|email|unique:agens,email',
            'no_hp' => 'required',
            'divisi' => 'required',
            'status' => 'required'
        ]);

        $agen = Agen::create($request->all());

        return response()->json([
            'message' => 'Data agen berhasil ditambahkan',
            'data' => $agen
        ], 201);
    }

    public function show($id)
    {
        $agen = Agen::find($id);

        if (!$agen) {
            return response()->json([
                'message' => 'Data agen tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'message' => 'Detail data agen',
            'data' => $agen
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $agen = Agen::find($id);

        if (!$agen) {
            return response()->json([
                'message' => 'Data agen tidak ditemukan'
            ], 404);
        }

        $agen->update($request->all());

        return response()->json([
            'message' => 'Data agen berhasil diperbarui',
            'data' => $agen
        ], 200);
    }

    public function destroy($id)
    {
        $agen = Agen::find($id);

        if (!$agen) {
            return response()->json([
                'message' => 'Data agen tidak ditemukan'
            ], 404);
        }

        $agen->delete();

        return response()->json([
            'message' => 'Data agen berhasil dihapus'
        ], 200);
    }
}