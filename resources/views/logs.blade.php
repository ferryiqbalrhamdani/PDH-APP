@extends('layouts.default-admin')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="mt-4 mb-0" style="text-transform: capitalize">{{$title }}</h1>   
</div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>

    <div class="card mb 4 shadow">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Table {{$title}}
        </div>
        <table class="table table-bordered responsive" id="dataTable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Ukuran Baju</th>
                    <th>Ukuran Celana</th>
                    <th>Ukuran Topi</th>
                    <th>Ukuran Sepatu</th>
                    <th>Detail</th>
                    <th>Di input</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $l)
                    <tr>
                        <td>{{ $l->user_id }}</td>
                        <td>{{ $l->kategori }}</td>
                        <td>{{$l->size_id}}</td>
                        <td>{{$l->size_id_celana}}</td>
                        <td>{{$l->size_id_topi}}</td>
                        <td>{{$l->size_id_sepatu}}</td>
                        <td><a href="logs/{{ $l->id }}">Detail</a></td>
                        <td>{{$l->created_at->format('d/m/Y')}}</td>
                    </tr>         
                @endforeach
                
            </tbody>
        </table>
    </div>
    
    <div class="card mb-4 mt-4 shadow">
        <div class="card-header" style="text-transform: capitalize">
            <i class="fas fa-table me-1"></i>
            Data Table {{$title}}
        </div>

        

        @if (session('status'))
            <div class="alert alert-success shadow-md alert-sm">
                {{session('status')}}
            </div>            
        @endif
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Ukuran Baju</th>
                            <th>Ukuran Celana</th>
                            <th>Ukuran Topi</th>
                            <th>Ukuran Sepatu</th>
                            <th>Detail</th>
                            <th>Di input</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Ukuran Baju</th>
                            <th>Ukuran Celana</th>
                            <th>Ukuran Topi</th>
                            <th>Ukuran Sepatu</th>
                            <th>Detail</th>
                            <th>Di input</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($logs as $l)
                            <tr>
                                <td>{{ $l->user_id }}</td>
                                <td>{{ $l->kategori }}</td>
                                <td>{{$l->size_id}} </td>
                                <td>{{$l->size_id_celana}} </td>
                                <td>{{$l->size_id_topi}} </td>
                                <td>{{$l->size_id_sepatu}} </td>
                                <td><a href="logs/{{ $l->id }}">Detail</a></td>
                                <td>{{$l->created_at->format('d/m/Y')}}</td>
                            </tr>         
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection