<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use Illuminate\Http\Request;

class CryptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cryptos = Crypto::all();

        return view('admin.crypto.index', compact('cryptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crypto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'crypto_market' => 'required|string|max:155',
            'asset_name' => 'required',
            'crypto_price' => 'required'
        ]);

        $post = Crypto::create([
            'crypto_market' => $request->crypto_market,
            'asset_name' => $request->asset_name,
            'crypto_price' => $request->crypto_price,
            'product_status' => $request->product_status,
        ]);

        if ($post) {
            return redirect('/admin/home')
                ->with([
                    'success' => 'Data berhasil di input'
                ]);
        } else {
            return redirect('/admin/home/crypto-create')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data gagal di input'
                ]);
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crypto = Crypto::find($id);

        return view('admin.crypto.edit', compact('crypto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crypto $crypto)
    {
        $this->validate($request, [
            'crypto_market' => 'required|string|max:155',
            'asset_name' => 'required',
            'crypto_price' => 'required'
        ]);

        $crypto->update([
            'crypto_market' => $request->crypto_market,
            'asset_name' => $request->asset_name,
            'crypto_price' => $request->crypto_price,
            'product_status' => $request->product_status,
        ]);

        if ($crypto) {
            return redirect('/admin/home')
                ->with([
                    'success' => 'Data berhasil di input'
                ]);
        } else {
            return redirect('/admin/crypto-create')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data gagal di input'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crypto = Crypto::find($id)->delete();
        return redirect('/admin/home')->with('message', 'Data berhasil di delete');
    }
}
