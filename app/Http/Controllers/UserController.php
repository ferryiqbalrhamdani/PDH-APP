<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Itemlog;
use App\Models\Logs;
use App\Models\Size;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $data['title'] = 'user';
        $data['kemeja'] = Item::where('nama', 'kemeja pria')->first();
        $data['kemeja_wanita'] = Item::where('nama', 'kemeja wanita')->first();
        $data['kemeja_wanita_hijab'] = Item::where('nama', 'kemeja wanita hijab')->first();
        $data['kategori'] = Category::all();
        $data['kategori_detail'] = Category::where('nama', 'p', 'p hijab')->first();


        return view('user.index', $data);
    }

    public function pilih(Request $request) {
        if($request->pilih == 'p' && $request->show == 'rok') {
            return redirect('user-wanita-add');
        } elseif($request->pilih == 'p hijab') {
            return redirect('user-wanita-hijab-add');
        } elseif($request->pilih == 'p' && $request->show == 'celanaPanjang') {
            return redirect('user-wanita-celana-add');
        }
        // 
        
    }

    public function addDataPria() {
        $data['title'] = 'Tambah Data';
        $data['sizes'] = Size::all();
        $data['item'] = Item::all();
        $data['kemeja_pria'] = Size::where('ukuran_cm', 14)->first();
        $data['celana_pria'] = Size::where('ukuran_cm', 27)->first();
        $data['topi_pria'] = Size::where('ukuran_cm', 54)->first();
        $data['sepatu_pria'] = Size::where('id', 43)->first();

        return view('user.user-add', $data);
    }

    public function userWanitaHijab() {
        $data['title'] = 'Tambah Data';
        $data['sizes'] = Size::all();
        $data['item'] = Item::all();
        $data['kemeja_pria'] = Size::where('ukuran_cm', 15)->first();
        $data['celana_pria'] = Size::where('ukuran_cm', 29)->first();
        $data['topi_pria'] = Size::where('ukuran_cm', 54)->first();
        $data['sepatu_pria'] = Size::where('id', 43)->first();

        return view('user.user-wanita-hijab-add', $data);
    }

    public function userWanita() {
        $data['title'] = 'Tambah Data';
        $data['sizes'] = Size::all();
        $data['item'] = Item::all();
        $data['kemeja_pria'] = Size::where('ukuran_cm', 14)->first();
        $data['rok_pria'] = Size::where('ukuran_cm', 28)->first();
        $data['topi_pria'] = Size::where('ukuran_cm', 54)->first();
        $data['sepatu_pria'] = Size::where('id', 43)->first();

        return view('user.user-wanita-add', $data);
    }

    public function userCelanaWanita() {
        $data['title'] = 'Tambah Data';
        $data['sizes'] = Size::all();
        $data['item'] = Item::all();
        $data['kemeja_pria'] = Size::where('ukuran_cm', 14)->first();
        $data['rok_pria'] = Size::where('ukuran_cm', 28)->first();
        $data['topi_pria'] = Size::where('ukuran_cm', 54)->first();
        $data['sepatu_pria'] = Size::where('id', 43)->first();

        return view('user.user-wanita-celana-add', $data);
    }

    

    

    public function storeDataPria(Request $request) {
        // dd($request->all());

        Itemlog::create([
            'user_id' => $request->user,
            'kategori' => $request->kategori,
            // baju
            'item_id' => $request->baju,
            'size_id' => $request->package,
            'catatanBaju' => $request->catatanBaju,
            // celana
            'item_id_celana' => $request->celana,
            'size_id_celana' => $request->packageCelanaPria,
            'catatanCelana' => $request->catatanCelana,
            // topi
            'item_id_topi' => $request->topi,
            'size_id_topi' => $request->packageTopiPria,
            'catatanTopi' => $request->catatanTopi,
            // sepatu
            'item_id_sepatu' => $request->sepatu,
            'size_id_sepatu' => $request->packageSepatuPria,
            'catatanSepatu' => $request->catatanSepatu,
            // tolerant
            'panjangcelanaTolerant' => $request->panjangcelanaTolerant + $request->panjangcelana,
            'lebarbawahTolerant' => $request->lebarbawahTolerant + $request->lebarbawah,
            'lebarpinggulTolerant' => $request->lebarpinggulTolerant + $request->lebarpinggul,
            'lebarpinggangTolerant' => $request->lebarpinggangTolerant + $request->lebarpinggang,
            'lingkarbadanTolerant' => $request->lingkarbadanTolerant + $request->lingkarbadan,
            'panjangbajuTolerant' => $request->panjangbajuTolerant + $request->panjangbaju,
            'lingkarpinggangTolerant' => $request->lingkarpinggangTolerant + $request->lingkarpinggangTolerant,
            'panjanglenganTolerant' => $request->panjanglenganTolerant + $request->panjanglengan,
            'lebarpundakTolerant' => $request->lebarpundakTolerant + $request->lebarpundak,
            'lebarpahaTolerant' => $request->lebarpahaTolerant + $request->lebarpaha,
        ]);
        // 'user_id',
        // 'size_id',
        // 'item_id',
        // 'item_id_celana',
        // 'item_id_sepatu',
        // 'item_id_topi',
        // 'catatanTopi',
        // 'catatanCelana',
        // 'catatanSepatu',
        // 'catatanBaju',

        return redirect('user-success');
    }

    public function storeWanitaHijab(Request $request) {
        // dd($request->all());

        Itemlog::create([
            'user_id' => $request->user,
            'kategori' => $request->kategori,
            // baju
            'item_id' => $request->baju,
            'size_id' => $request->package,
            'catatanBaju' => $request->catatanBaju,
            // celana
            'item_id_celana' => $request->celana,
            'size_id_celana' => $request->packageCelanaPria,
            'catatanCelana' => $request->catatanCelana,
            // topi
            'item_id_topi' => $request->topi,
            'size_id_topi' => $request->packageTopiPria,
            'catatanTopi' => $request->catatanTopi,
            // sepatu
            'item_id_sepatu' => $request->sepatu,
            'size_id_sepatu' => $request->packageSepatuPria,
            'catatanSepatu' => $request->catatanSepatu,
            // tolerant
            'panjangcelanaTolerant' => $request->panjangcelanaTolerant + $request->panjangcelana,
            'lebarbawahTolerant' => $request->lebarbawahTolerant + $request->lebarbawah,
            'lebarpinggulTolerant' => $request->lebarpinggulTolerant + $request->lebarpinggul,
            'lebarpinggangTolerant' => $request->lebarpinggangTolerant + $request->lebarpinggang,
            'lingkarbadanTolerant' => $request->lingkarbadanTolerant + $request->lingkarbadan,
            'panjangbajuTolerant' => $request->panjangbajuTolerant + $request->panjangbaju,
            'lingkarpinggangTolerant' => $request->lingkarpinggangTolerant + $request->lingkarpinggangTolerant,
            'panjanglenganTolerant' => $request->panjanglenganTolerant + $request->panjanglengan,
            'lebarpundakTolerant' => $request->lebarpundakTolerant + $request->lebarpundak,
            'lebarpahaTolerant' => $request->lebarpahaTolerant + $request->lebarpaha,
        ]);
        // 'user_id',
        // 'size_id',
        // 'item_id',
        // 'item_id_celana',
        // 'item_id_sepatu',
        // 'item_id_topi',
        // 'catatanTopi',
        // 'catatanCelana',
        // 'catatanSepatu',
        // 'catatanBaju',

        return redirect('user-success');
    }

    public function storeWanita(Request $request) {
        // dd($request->all());

        Itemlog::create([
            'user_id' => $request->user,
            'kategori' => $request->kategori,
            // baju
            'item_id' => $request->baju,
            'size_id' => $request->package,
            'catatanBaju' => $request->catatanBaju,
            // celana
            'item_id_celana' => $request->celana,
            'size_id_celana' => $request->packageCelanaPria,
            'catatanCelana' => $request->catatanCelana,
            // topi
            'item_id_topi' => $request->topi,
            'size_id_topi' => $request->packageTopiPria,
            'catatanTopi' => $request->catatanTopi,
            // sepatu
            'item_id_sepatu' => $request->sepatu,
            'size_id_sepatu' => $request->packageSepatuPria,
            'catatanSepatu' => $request->catatanSepatu,
            // tolerant
            'panjangcelanaTolerant' => $request->panjangcelanaTolerant + $request->panjangcelana,
            'lebarbawahTolerant' => $request->lebarbawahTolerant + $request->lebarbawah,
            'lebarpinggulTolerant' => $request->lebarpinggulTolerant + $request->lebarpinggul,
            'lebarpinggangTolerant' => $request->lebarpinggangTolerant + $request->lebarpinggang,
            'lingkarbadanTolerant' => $request->lingkarbadanTolerant + $request->lingkarbadan,
            'panjangbajuTolerant' => $request->panjangbajuTolerant + $request->panjangbaju,
            'lingkarpinggangTolerant' => $request->lingkarpinggangTolerant + $request->lingkarpinggangTolerant,
            'panjanglenganTolerant' => $request->panjanglenganTolerant + $request->panjanglengan,
            'lebarpundakTolerant' => $request->lebarpundakTolerant + $request->lebarpundak,
            'lebarpahaTolerant' => $request->lebarpahaTolerant + $request->lebarpaha,
        ]);
        // 'user_id',
        // 'size_id',
        // 'item_id',
        // 'item_id_celana',
        // 'item_id_sepatu',
        // 'item_id_topi',
        // 'catatanTopi',
        // 'catatanCelana',
        // 'catatanSepatu',
        // 'catatanBaju',

        return redirect('user-success');
    }

    public function success() {
        echo "sukses";
    }
}
