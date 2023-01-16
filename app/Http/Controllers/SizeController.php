<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'ukuran';
        $data['sizes'] = Size::all();
        $data['sizecount'] = Size::count();

        return view('sizes.size', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data['title'] = 'tambah ukuran';
        $data['item'] = Item::all();

        return view('sizes.size-add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all());

       $data = [
            'ukuran_cm' => $request->ukuran_cm,
            'panjang_baju' => $request->panjang_baju,
            'panjang_tangan' => $request->panjang_tangan,
            'lebar_pundak' => $request->lebar_pundak,
            'lebar_punggung' => $request->lebar_punggung,
            'setengah_lingkaran' => $request->setengah_lingkaran,
            'lingkar_badan ' => $request->lingkar_badan,
            'lebar_pinggang' => $request->lebar_pinggang,
            'lebar_pinggul' => $request->lebar_pinggul,
            'lebar_paha' => $request->lebar_paha,
            'lebar_bawah' => $request->lebar_bawah,
            'panjang_celana' => $request->panjang_celana,
            'panjang_lengan' => $request->panjang_lengan,
            'lingkar_pinggang' => $request->lingkar_pinggang,
       ];

        $size = Size::create($data);
        $size->item()->sync($request->item);
        
        return redirect('size')->with('status', 'Data ukuran berhasil ditambahkan.');
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
    public function edit($slug)
    {
        $data['title'] = 'edit ukuran';
        $data['size'] = Size::where('slug', $slug)->first();

        return view('sizes.size-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'ukuran_cm' => 'required',
            'lebar_pundak' => 'required',
            'panjang_lengan' => 'required',
            'panjang_baju' => 'required',
            'lingkar_pinggang' => 'required',
            'lingkar_badan' => 'required',
        ]);

        $size = Size::where('slug', $slug)->first();
        $size->slug = null;
        $size->update($request->all());

        return redirect('sizes')->with('status', 'Ukuran berhasil ditambah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $slug)
    {
        $size = Size::where('slug', $slug)->first();
        $size->item()->sync($request->item);
        $size->delete($request->all());

        return redirect('size')->with('status', 'Ukuran berhasil dihapus.');
    }
}
