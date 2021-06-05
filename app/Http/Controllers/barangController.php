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
      ->select('id','nama')
      ->get();
      $barangs = DB::table('barang')->get();
      return view('barang_0277',['pelanggans'=>$pelanggans],['barangs'=>$barangs]);
    }
}
