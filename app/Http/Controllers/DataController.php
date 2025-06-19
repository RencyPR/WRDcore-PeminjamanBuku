<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Data::all();
        return view('data.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'KdPinjam' => 'required',
            'nama' => 'required',
            'judul' => 'required',
            'KdBuku' => 'required',
            'tglPinjam' => 'required|date',
            'tglKembali' => 'required|date',
            'status' => 'required'
        ]);

        Data::create($request->all());
        return redirect()->route('data.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
        return view('data.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
         return view('data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        //


    $request->validate([
        'nama' => 'required',
        'judul' => 'required',
        'KdBuku' => 'required',
        'tglPinjam' => 'required|date',
        'tglKembali' => 'required|date',
        'status' => 'required'
    ]);

        $data->update($request->all());
        return redirect()->route('data.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
         $data->delete();
        return redirect()->route('data.index')->with('success', 'Data berhasil dihapus!');
    }
}
