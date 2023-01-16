<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /// menampilkan isi session
	public function tampilkanSession(Request $request) {
		if($request->session()->has('nama')){
			echo $request->session()->get('nama');
		}else{
			echo 'Tidak ada data dalam session.';
		}
	}
 
	// membuat session
	public function buatSession(Request $request) {
        $baju = Item::where('nama', 'kemeja pria')->first();

		$request->session()->put('nama', $baju);
		echo "Data telah ditambahkan ke session.";
	}
 
	// menghapus session
	public function hapusSession(Request $request) {
		$request->session()->forget('nama');
		echo "Data telah dihapus dari session.";
	}
}
