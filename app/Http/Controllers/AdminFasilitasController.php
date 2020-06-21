<?php

namespace App\Http\Controllers;

use App\Peralatan;
use Illuminate\Http\Request;

class AdminFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatan = Peralatan::paginate(5);
        return view('fasilitas.fasilitas', compact('peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,  [
            'id' => 'required',
            'nama_fasilitas' => 'required',
            'keterangan' => 'required'

        ]);

        $peralatan = Peralatan::create([
            'id' => $request->id,
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('Sukses', 'Data Fasilitas Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peralatan = Peralatan::findorfail($id);
        return view('fasilitas.edit', compact('peralatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id' => 'required'


        ]);

        $peralatan_data =[
            'id' => $request->id,
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan' => $request->keterangan,

        ];

        Peralatan::whereId($id)->update($peralatan_data);
         return redirect("/fasilitas");
         

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peralatan = Peralatan::findorfail($id);
        $peralatan->delete();

        return redirect()->back()->with('S ucces','Data Fasilitas Berhasil Dihapus');
    }
}
