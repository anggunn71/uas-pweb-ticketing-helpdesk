<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Solusi::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $solusi = Solusi::create([
            'ticket_id' => $request->ticket_id,
            'solusi' => $request->solusi,
            'status_solusi' => $request->status_solusi
        ]);

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $solusi
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $solusi = Solusi::find($id);

        if (!$solusi) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json($solusi, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $solusi = Solusi::find($id);

        if (!$solusi) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $solusi->update([
            'ticket_id' => $request->ticket_id,
            'solusi' => $request->solusi,
            'status_solusi' => $request->status_solusi
        ]);

        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $solusi
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $solusi = Solusi::find($id);

        if (!$solusi) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $solusi->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ], 200);
    }
}