<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index() {
        $koleksi = Collection::all();
        return view('koleksi.daftarKoleksi', compact('koleksi'));
    }

    public function show($id)
    {
        $koleksi = Collection::findOrFail($id);
        return view('koleksi.infoKoleksi', compact('koleksi'));
    }

    public function create()
    {
    return view('koleksi.registrasi');
    }

    public function store(Request $request)
    {
    $request->validate([
        'namaKoleksi' => 'required|string|max:255',
        'jenisKoleksi' => 'required|string|max:255',
        'jumlahKoleksi' => 'required|integer',
    ]);
    Collection::create([
        'namaKoleksi' => $request->namaKoleksi,
        'jenisKoleksi' => $request->jenisKoleksi,
        'jumlahKoleksi' => $request->jumlahKoleksi,
    ]);
    
    Session::flash('success', 'Koleksi berhasil ditambahkan!');
    return redirect()->route('koleksi.registrasi');
}
}
