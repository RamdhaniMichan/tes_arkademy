<?php

namespace App\Http\Controllers;

use App\Model\Produks;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 5;
        $produks = produks::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($produks->currentPage() - 1);
        $jumlah_data = produks::count();

        return view('index', compact('produks', 'no', 'jumlah_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $produk = new Produks;
        $produk->nama_produk = $request->nama_produk;
        $produk->keterangan = $request->keterangan;
        $produk->harga = $request->harga;
        $produk->jumlah = $request->jumlah;
        $produk->save();

        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function show(Produks $produks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function edit(Produks $produks, $id)
    {
        $produk = Produks::find($id);

        return view('edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produks $produks, $id)
    {
        $this->validate($request,[
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $produk = Produks::find($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->keterangan = $request->keterangan;
        $produk->harga = $request->harga;
        $produk->jumlah = $request->jumlah;
        $produk->update();

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produks $produks, $id)
    {
        $produk = Produks::find($id);
        $produk->delete();

        return redirect('/produk');
    }
}
