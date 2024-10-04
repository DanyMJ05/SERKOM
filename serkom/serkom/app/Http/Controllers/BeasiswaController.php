<?php

// app/Http/Controllers/BeasiswaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;
use Illuminate\Http\RedirectResponse;

class BeasiswaController extends Controller
{
    // controller function pindah ke halaman form
    public function create()
    {
        return view('form');
    }

    // controller function untuk mengambil semua data 
    public function index() 
    {   
        // query memilih dan mengambil data dari table beasiswas
        $beasiswas = Beasiswa::all();
        // mengirim data ke halaman 
        return view('data', compact('beasiswas'));
    }

    // controller function untuk insert data
    public function store(Request $request)
    {
        // Validasi input sesuai kolom dan form
        $validateData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'hp' => 'required|string|max:15',            
            'semester' => 'required|integer|min:1|max:8',
            'ipk' => 'required|numeric|min:3|max:4',
            'beasiswa' => 'required|string',
            'berkas' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);                

        // upload file dari form ke folder berkas
        if ($request->hasFile('berkas')) {
            $file = $request->file('berkas');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('berkas/', $filename);
            $validateData['berkas'] = $filename;
        }

        // Simpan data ke database        
        $beasiswa = new Beasiswa;
        $beasiswa->nama = $validateData['nama'];
        $beasiswa->email = $validateData['email'];
        $beasiswa->hp = $validateData['hp'];
        $beasiswa->semester = $validateData['semester'];
        $beasiswa->ipk = $validateData['ipk'];
        $beasiswa->beasiswa = $validateData['beasiswa'];
        $beasiswa->berkas = $validateData['berkas'];
        $beasiswa->status = 0;                                
        $beasiswa->save();

        // Redirect/pindah ke halaman data setelah data berhasil diinput
        // return redirect()->back()->with('success', 'pendaftaran berhasil');
        return redirect()->route('beasiswa.index')->with('success', 'Pendaftaran berhasil');
    }
}
