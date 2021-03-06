<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;

class ClientController extends Controller
{



  function showshop()
  {
    
    $data['list_produk'] = Produk::paginate(6);
    $data['list_provinsi'] = Provinsi::all();
    return view('client.shoes', $data);
  }

  function filter(){
    $nama = request('nama');
    $data['nama']=$nama;
    $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
    return view('client.shoes');
  }

  function filter2()
  {
    $harga_min = request('harga_min');
    $harga_max = request('harga_max');
    $data['harga_min'] = $harga_min;
    $data['harga_max'] = $harga_max;

    $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
    return view('client.shoes', $data);
  }
  

  

  function showproducts(Produk $produk)
  {

    $data['produk'] = $produk;
    return view('client.shop', $data);
  }

 
}