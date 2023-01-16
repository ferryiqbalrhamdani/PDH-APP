@extends('layouts.default-admin')

@section('content')
    <h1 class="mt-4" style="text-transform: capitalize">{{$title}}, Hi {{ Auth::user()->nama }} 👏</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Warning Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Success Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
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
                            <td>{{$l->size_id}} cm</td>
                            <td>{{$l->size_id_celana}} cm</td>
                            <td>{{$l->size_id_topi}} cm</td>
                            <td>{{$l->size_id_sepatu}} cm</td>
                            <td><a href="">Detail</a></td>
                            <td>{{$l->created_at->format('d/m/Y')}}</td>
                        </tr>         
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection