@extends('layouts.default-admin')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="mt-4 mb-0" style="text-transform: capitalize">{{$title}}</h1>
    <a href="size-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Ukuran</a>
</div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
    
    <div class="card mb-4 shadow">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable {{$title}}
        </div>
        @if (session('status'))
        <div class="alert alert-success shadow-md alert-sm">
            {{session('status')}}
        </div>            
        @endif
        <div class="card-body">
                <table class="table-bordered" id="datatablesSimple" style="text-transform: capitalize">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Ukuran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Ukuran</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($sizecount == 0)
                            <tr>
                                <td colspan="9"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($sizes as $c)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @foreach ($c->item as $item)
                                            {{ $item->nama }}
                                        @endforeach
                                    </td>
                                    <td style="text-transform: lowercase">{{ $c->ukuran_cm }} cm</td>
                                    <td>
                                        <a href="" class="badge bg-success">ubah</a>
                                        <form action="size-delete/{{ $c->slug }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button class="badge bg-danger" onclick="return confirm('Apakah anda ingin menghapus data?')">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        
                    </tbody>
                </table>
        </div>
    </div>
    
@endsection