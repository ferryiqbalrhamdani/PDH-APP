@extends('layouts.default-admin')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="mt-4 mb-0" style="text-transform: capitalize">{{$title}}</h1>
    <a href="item" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
</div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
    
    <div class="row d-flex justify-content-center">
        <div class="col-sm-5">
            <div class="card mb-4 shadow">
                <div class="card-body">
                    <form action="item-add" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama barang">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Warna</label>
                            <input type="text" required class="form-control" name="color" id="color" placeholder="Masukan warna">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select name="category[]" id="category" class="form-control select-multiple">
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary form-control" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection