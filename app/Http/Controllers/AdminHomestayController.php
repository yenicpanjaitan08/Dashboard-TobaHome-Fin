<?php

namespace App\Http\Controllers;
use App\Homestay1;
use Illuminate\Http\Request;

class AdminHomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homestay = Homestay1::paginate(5);
        return view('homestay.homestay', compact('homestay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homestay.create');
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
            'nama_homestay' => 'required',
            'status' => 'required',
            'gambar' => 'required',
            'deskripsi_homestay' => 'required',

        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $homestay = Homestay1::create([
            'id' => $request->id,
            'nama_homestay' => $request->nama_homestay,
            'status' => $request->status,
            'deskripsi_homestay' => $request->deskripsi_homestay,
            'gambar' => 'public/assets/dist/img/'.$new_gambar
            
        ]);
        
        $gambar->move('public/assets/dist/img/', $new_gambar);
        return redirect()->back()->with('Sukses', 'Data Homestay Berhasil Disimpan');
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
    
        $homestay = Homestay1::findorfail($id);
        return view('homestay.edit', compact('homestay'));
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

        $homestay_data =[
            'id' => $request->id,
            'nama_homestay' => $request->nama_homestay,
            'status' => $request->status,
            'gambar'    => $request->gambar,
            'deskripsi_homestay'  => $request->deskripsi_homestay,

        ];

        Homestay::whereId($id)->update($homestay_data);
         return redirect("/homestay");
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homestay= Homestay1::findorfail($id);
        $homestay->delete();

        return redirect()->back()->with('Succes','Data Homestay Berhasil Dihapus');
    }
}
