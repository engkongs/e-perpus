<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('_kategori', [
            '_kategori'=> Kategori::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Kategori $kategori)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $kategori = Kategori::where('id', $id)->first();
        return view('edit.edit-kategori', [
            'kategori' => $kategori,
            'title' => 'kategori',
            'active' => 'kategori',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
