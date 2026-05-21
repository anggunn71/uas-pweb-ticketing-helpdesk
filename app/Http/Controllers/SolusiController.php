<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    /**
     * Menampilkan semua data solusi
     */
    public function index()
    {
        $solusi = Solusi::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Data solusi berhasil diambil',
            'data' => $solusi
        ], 200);
    }

    /**
     * Menambahkan data solusi
     */
    public function store(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required',
            'solusi' => 'required',
            'status_solusi' => 'required'
        ]);

        $solusi = Solusi::create([
            'ticket_id' => $request->ticket_id,
            'solusi' => $request->solusi,
            'status_solusi' => $request->status_solusi
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data solusi berhasil ditambahkan',
            'data' => $solusi
        ], 201);
    }

    /**
     * Menampilkan detail solusi
     */
    public function show(string $id)
    {
        $solusi = Solusi::find($id);

        if (!$solusi) {
            return response()->json([
                'success' => false,
                'message' => 'Data solusi tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $solusi
        ], 200);
    }

    /**
     * Update solusi
     */
    public function update(Request $request, string $id)
    {
        $solusi = Solusi::find($id);

        if (!$solusi) {
            return response()->json([
                'success' => false,
                'message' => 'Data solusi tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'ticket_id' => 'required',
            'solusi' => 'required',
            'status_solusi' => 'required'
        ]);

        $solusi->update([
            'ticket_id' => $request->ticket_id,
            'solusi' => $request->solusi,
            'status_solusi' => $request->status_solusi
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data solusi berhasil diupdate',
            'data' => $solusi
        ], 200);
    }

    /**
     * Hapus solusi
     */
    public function destroy(string $id)
    {
        $solusi = Solusi::find($id);

        if (!$solusi) {
            return response()->json([
                'success' => false,
                'message' => 'Data solusi tidak ditemukan'
            ], 404);
        }

        $solusi->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data solusi berhasil dihapus'
        ], 200);
    }
}