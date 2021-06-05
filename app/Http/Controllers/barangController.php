<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class barangController extends Controller
{
    //
    public function index(){
      $pelanggans = DB::table('transaksi')
      ->join('barang','transaksi.id_barang','=','barang.id')
      ->join('pelanggan','transaksi.id_pelanggan','=','pelanggan.id')
      ->select(
          'barang.nama as namaBarang',
          'pelanggan.id as idPelanggan',
           'pelanggan.nama as namaPelanggan',
           'pelanggan.alamat as almPelanggan',
           'barang.harga as hrgBrg'
           )
      ->get();
      return view('barang_0277',['pelanggans'=> $pelanggans]);
    }
}
