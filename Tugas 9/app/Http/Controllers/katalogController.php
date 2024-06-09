<?php

namespace App\Http\Controllers;

use App\Models\katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class katalogController extends Controller
{
    public function index()
    {
        $katalog = katalog::all();
        return view('katalog.katalog', compact('katalog'));
    }

    public function create()
    {
        return view('katalog.katalog-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'jenis' => 'required',
            'grade' => 'required',
            'nama' => 'required',
            'asal' => 'required',
            'harga' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_katalog';
        $gambar->move($tujuan_upload, $nama_gambar);

        katalog::create([
            'jenis_kopi' => $request->jenis,
            'grade' => $request->grade,
            'nama' => $request->nama,
            'asal' => $request->asal,
            'harga' => $request->harga,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/katalog');
    }

    public function edit($id_katalog)
    {
        $katalog = katalog::find($id_katalog);
        return view('katalog.katalog-edit', compact('katalog'));
    }

    public function update(Request $request, $id_katalog)
    {
        $request->validate([
            'jenis' => 'required',
            'grade' => 'required',
            'nama' => 'required',
            'asal' => 'required',
            'harga' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $katalog = katalog::find($id_katalog);

        if($request->hasFile('gambar')){

            File::delete('img_katalog/'.$katalog->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_katalog';
            $gambar->move($tujuan_upload, $nama_gambar);
            $katalog->gambar = $nama_gambar;
        }

        $katalog->update([
            'jenis_kopi' => $request->jenis,
            'grade' => $request->grade,
            'nama' => $request->nama,
            'asal' => $request->asal,
            'harga' => $request->harga,
        ]);

        return redirect('/katalog');
    }

    public function delete($id_katalog)
    {
        $katalog = katalog::find($id_katalog);
        return view('katalog.katalog-hapus', compact('katalog'));
    }

    public function destroy($id_katalog)
    {
        $katalog = katalog::find($id_katalog);
        File::delete('img_categories/'.$katalog->gambar);
        $katalog->delete();
        return redirect('/katalog');
    }
}
