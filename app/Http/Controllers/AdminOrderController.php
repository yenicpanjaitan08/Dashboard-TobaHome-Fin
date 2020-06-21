<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::paginate(5);
        return view('order.order', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
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
            'nama' => 'required',
            'notel' => 'required',
            'nama_homestay' => 'required'

        ]);

        $order = Order::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'notel' => $request->notel,
            'nama_homestay' => $request->nama_homestay,
        ]);

        return redirect()->back()->with('Sukses', 'Data Pemesanan Berhasil Disimpan'); 
   
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
        $order = Order::findorfail($id);
        return view('order.edit', compact('order'));
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

        $order_data =[
            'id' => $request->id,
            'nama' => $request->nama,
            'notel' => $request->notel,
            'nama_homestay' => $request->nama_homestay,
            
        ];

        Order::whereId($id)->update($order_data);
         return redirect("/order");
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order= Order::findorfail($id);
        $order->delete();

        return redirect()->back()->with('Succes','Data Pemesanan Berhasil Dihapus');
    }
}
