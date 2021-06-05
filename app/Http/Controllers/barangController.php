<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class barangController extends Controller
{
    //
    public function index(){
        $barangs = DB::table('barang');
        return view('barang_0277',
        ['barangs' => $barangs],
       );
    }
}
