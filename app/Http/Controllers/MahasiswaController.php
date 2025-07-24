<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mahasiswa::all();
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas',
            'jurusan' => 'required',
            'angkatan' => 'required|digits:4',
        ]);

        return Mahasiswa::create($request->all());
    }

    public function show($id)
    {
        return Mahasiswa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all($id));
        return $mahasiswa;
    }
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return response()->json(null,204);
    }
}
