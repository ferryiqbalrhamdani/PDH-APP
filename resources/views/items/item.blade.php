@extends('layouts.default-admin')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="mt-4 mb-0" style="text-transform: capitalize">{{$title}}</h1>
    <a href="item-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Item Barang</a>
</div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
    
    @if ($itemcount == 0)
        <div class="row">
            <div class="col">
                <div class="alert alert-danger text-center">Belum ada data.</div>
            </div>
        </div>
    @else
    <div class="row">
        @foreach ($items as $i)
        <div class="col-xl-3 col-md-6">
            <div class="card bg-{{$i->color}} text-white mb-4 shadow" style="text-transform: capitalize">
                <div class="card-body">{{$i->nama}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="item-show/{{ $i->slug }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        
    @endif

@endsection