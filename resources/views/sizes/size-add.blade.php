@extends('layouts.default-admin')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="mt-4 mb-0" style="text-transform: capitalize">{{$title}}</h1>
    <a href="/size" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
</div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
    
    <div class="row d-flex justify-content-center">
        <div class="col-sm-5">
            <div class="card mb-4 shadow">
                <div class="card-body">
                    <form action="size-add" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="item" class="form-label">Nama Barang</label>
                            <select name="item[]" id="item" class="form-control select-multiple">
                                @foreach ($item as $c)
                                    <option value="{{ $c->id }}">{{ $c->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ukuran_cm" class="form-label">Ukuran</label>
                            <input type="text" class="form-control" name="ukuran_cm" id="ukuran_cm" placeholder="Masukan ukuran dalam CM">
                        </div>
                        <div class="mb-3">
                            <label for="lebar_pundak" class="form-label">Lebar Pundak</label>
                            <input type="text" class="form-control" name="lebar_pundak" id="lebar_pundak" placeholder="Masukan lebar pundak">
                        </div>
                        <div class="mb-3">
                            <label for="panjang_lengan" class="form-label">Panjang Lengan</label>
                            <input type="text" class="form-control" name="panjang_lengan" id="panjang_lengan" placeholder="Masukan panjang lengan">
                        </div>
                        <div class="mb-3">
                            <label for="lingkar_pinggang" class="form-label">Lingkar Pinggang</label>
                            <input type="text" class="form-control" name="lingkar_pinggang" id="lingkar_pinggang" placeholder="Masukan lingkar pinggang">
                        </div>
                        <div class="mb-3">
                            <label for="panjang_baju" class="form-label">Panjang Baju</label>
                            <input type="text" class="form-control" name="panjang_baju" id="panjang_baju" placeholder="Masukan panjang baju">
                        </div>
                        <div class="mb-3">
                            <label for="lingkar_badan" class="form-label">Lingkar Badan</label>
                            <input type="text" class="form-control" name="lingkar_badan" id="lingkar_badan" placeholder="Masukan lingkar badan">
                        </div>
                        <div class="mb-3">
                            <label for="panjang_tangan" class="form-label">Panjang Tangan <b>Wanita</b></label>
                            <input type="text" class="form-control" name="panjang_tangan" id="panjang_tangan" placeholder="Masukan panjang tangan">
                        </div>
                        <div class="mb-3">
                            <label for="lebar_punggung" class="form-label">Lebar Punggung <b>Wanita</b></label>
                            <input type="text" class="form-control" name="lebar_punggung" id="lebar_punggung" placeholder="Masukan lebar pundak">
                        </div>
                        <div class="mb-3">
                            <label for="setengah_lingkaran" class="form-label">1/2 Lingkaran <b>Wanita</b></label>
                            <input type="text" class="form-control" name="setengah_lingkaran" id="setengah_lingkaran" placeholder="Masukan 1/2 lingkaran badan">
                        </div>
                        <div class="mb-3">
                            <label for="lebar_pinggang" class="form-label">Lebar Pinggang <b>Celana</b></label>
                            <input type="text" class="form-control" name="lebar_pinggang" id="lebar_pinggang" placeholder="Masukan lingkar badan">
                        </div>
                        <div class="mb-3">
                            <label for="lebar_pinggul" class="form-label">Lebar Pinggul <b>Celana</b></label>
                            <input type="text" class="form-control" name="lebar_pinggul" id="lebar_pinggul" placeholder="Masukan lingkar badan">
                        </div>
                        <div class="mb-3">
                            <label for="lebar_paha" class="form-label">Lebar Paha <b>Celana</b></label>
                            <input type="text" class="form-control" name="lebar_paha" id="lebar_paha" placeholder="Masukan lingkar badan">
                        </div>
                        <div class="mb-3">
                            <label for="lebar_bawah" class="form-label">Lebar Bawah <b>Celana</b></label>
                            <input type="text" class="form-control" name="lebar_bawah" id="lebar_bawah" placeholder="Masukan lingkar badan">
                        </div>
                        <div class="mb-3">
                            <label for="panjang_celana" class="form-label">Panjang <b>Celana</b></label>
                            <input type="text" class="form-control" name="panjang_celana" id="panjang_celana" placeholder="Masukan lingkar badan">
                        </div>
                        <button class="btn btn-primary form-control" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection