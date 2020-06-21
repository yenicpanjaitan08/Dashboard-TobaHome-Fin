<?php

namespace App\Http\Controllers;
use App\Ruangan;
use Illuminate\Http\Request;

class AdminRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::paginate(5);
        return view('ruangan.ruangan', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.create');
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
            'tipe_room' => 'required',
            'kapasitas' => 'required',
            'ukuran' => 'required',
            'tipe_bed' => 'required',
            'harga' => 'required'

        ]);

        $ruangan = Ruangan::create([
            'id' => $request->id,
            'tipe_room' => $request->tipe_room,
            'kapasitas' => $request->kapasitas,
            'ukuran' => $request->ukuran,
            'tipe_bed' => $request->tipe_bed,
            'harga' => $request->harga,
            
        ]);

        return redirect()->back()->with('Sukses', 'Data Ruangan Berhasil Disimpan');
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
        $ruangan = Ruangan::findorfail($id);
        return view('ruangan.edit', compact('ruangan'));
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

        $ruangan_data =[
            'id' => $request->id,
            'tipe_room' => $request->tipe_room,
            'kapasitas' => $request->kapasitas,
            'ukuran'    => $request->ukuran,
            'tipe_bed'  => $request->tipe_bed,
            'harga' => $request->harga,

        ];

        Ruangan::whereId($id)->update($ruangan_data);
         return redirect("/ruangan");
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangan = Ruangan::findorfail($id);
        $ruangan->delete();

        return redirect()->back()->with('Succes','Data Ruangan Berhasil Dihapus');
    }
}
