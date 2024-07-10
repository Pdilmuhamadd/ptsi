<?php

namespace App\Http\Controllers;

use App\Models\paket_proyek;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        return paket_proyek::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'deskripsi_proyek' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'target_selesai' => 'required|date',
            'estimasi_biaya' => 'required|numeric',
            'pic' => 'required|string|max:255',
            'mp' => 'required|string|max:255',
            'sumber_daya' => 'required|integer',
        ]);

        $paket_proyek = paket_proyek::create($validatedData);

        return response()->json($paket_proyek, 201);
    }

    public function show($id)
    {
        $item = paket_proyek::findOrFail($id);
        return view('pages.admin.detail', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_proyek' => 'sometimes|required|string|max:255',
            'deskripsi_proyek' => 'sometimes|nullable|string',
            'tanggal_mulai' => 'sometimes|required|date',
            'target_selesai' => 'sometimes|required|date',
            'estimasi_biaya' => 'sometimes|required|numeric',
            'pic' => 'sometimes|required|string|max:255',
            'mp' => 'sometimes|required|string|max:255',
            'sumber_daya' => 'sometimes|required|integer',
        ]);

        $paket_proyek = paket_proyek::findOrFail($id);
        $paket_proyek->update($validatedData);

        return response()->json($paket_proyek, 200);
    }

    public function destroy($id)
    {
        paket_proyek::destroy($id);

        return response()->json(null, 204);
    }
}
