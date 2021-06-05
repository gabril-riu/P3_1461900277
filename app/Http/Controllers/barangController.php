<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class barangController extends Controller
{
    //
    public function index(){
      $pelanggans = DB::table('pelanggan')
      ->join('barang','barang.id','=','transaksi.id_pelanggan')
      ->join('transaksi','transaksi.id_pelanggan','=','pelanggan.id')
      ->get();
      return view('barang_0277',['pelanggans'=>$pelanggans],['barangs'=>$barangs]);
    }
}
