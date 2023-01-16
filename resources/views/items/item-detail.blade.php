@extends('layouts.default-admin')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="mt-4 mb-0" style="text-transform: capitalize">{{$title }} {{ $item->nama }}</h1>
    <a href="/item" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
</div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{$title}} {{ $item->nama }}</li>
    </ol>
    
    <div class="card mb-4 shadow">
        <div class="card-header" style="text-transform: capitalize">
            <i class="fas fa-table me-1"></i>
            Data Table {{$item->nama}}
        </div>
        @if (session('status'))
            <div class="alert alert-success shadow-md alert-sm">
                {{session('status')}}
            </div>            
        @endif
        <div class="card-body">
            <table id="datatablesSimple" style="text-transform: capitalize">
                @if ($item->nama == 'kemeja pria')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pundak</th>
                            <th>Panjang Lengan</th>
                            <th>Lingkar Pinggang</th>
                            <th>Panjang Baju</th>
                            <th>Lingkar Badan</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pundak</th>
                            <th>Panjang Lengan</th>
                            <th>Lingkar Pinggang</th>
                            <th>Panjang Baju</th>
                            <th>Lingkar Badan</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }}</td>                                        
                                    <td> {{ $i->lebar_pundak }}</td>                                        
                                    <td> {{ $i->panjang_lengan }}</td>                                        
                                    <td> {{ $i->lingkar_pinggang }}</td>                                        
                                    <td> {{ $i->panjang_baju }}</td>                                        
                                    <td> {{ $i->lingkar_badan }}</td>                                        
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        
                    </tbody>
                @elseif($item->nama == 'celana panjang pria')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lingkar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Celana</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lingkar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Celana</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }}</td>                                        
                                    <td> {{ $i->lebar_pinggang }}</td>                                        
                                    <td> {{ $i->lebar_pinggul }}</td>                                        
                                    <td> {{ $i->lebar_paha }}</td>                                        
                                    <td> {{ $i->lebar_bawah }}</td>                                        
                                    <td> {{ $i->panjang_celana }}</td>                                        
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                @elseif($item->nama == 'topi pria')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }} cm</td>                                          
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody> 
                @elseif($item->nama == 'topi wanita')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }} cm</td>                                          
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody> 
                @elseif($item->nama == 'sepatu pria')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }} cm</td>                                          
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>  
                @elseif($item->nama == 'sepatu wanita')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }} cm</td>                                          
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>  
                @elseif($item->nama == 'kemeja wanita hijab')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pundak</th>
                            <th>Panjang Tangan</th> 
                            <th>1/2 Lingkar Pinggang</th>
                            <th>Panjang Baju</th>
                            <th>Lebar Punggung</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pundak</th>
                            <th>Panjang Tangan</th> 
                            <th>1/2 Lingkar Pinggang</th>
                            <th>Panjang Baju</th>
                            <th>Lebar Punggung</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }}</td>                                        
                                    <td> {{ $i->panjang_baju }}</td>                                        
                                    <td> {{ $i->panjang_tangan }}</td>                                         
                                    <td> {{ $i->lebar_pundak }}</td>                                        
                                    <td> {{ $i->lebar_punggung }}</td>                                        
                                    <td> {{ $i->setengah_lingkaran }}</td>                                        
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>   
                @elseif($item->nama == 'celana panjang wanita hijab')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lebar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Celana</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lebar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Celana</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }}</td>                                        
                                    <td> {{ $i->lebar_pundak }}</td>                                        
                                    <td> {{ $i->panjang_lengan }}</td>                                        
                                    <td> {{ $i->lingkar_pinggang }}</td>                                        
                                    <td> {{ $i->panjang_baju }}</td>                                        
                                    <td> {{ $i->lingkar_badan }}</td>                                        
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>   
                @elseif($item->nama == 'kemeja wanita')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pundak</th>
                            <th>Panjang Tangan</th> 
                            <th>1/2 Lingkar Pinggang</th>
                            <th>Panjang Baju</th>
                            <th>Lebar Punggung</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pundak</th>
                            <th>Panjang Tangan</th> 
                            <th>1/2 Lingkar Pinggang</th>
                            <th>Panjang Baju</th>
                            <th>Lebar Punggung</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }}</td>                                        
                                    <td> {{ $i->lebar_pundak }}</td>                                        
                                    <td> {{ $i->panjang_lengan }}</td>                                        
                                    <td> {{ $i->lingkar_pinggang }}</td>                                        
                                    <td> {{ $i->panjang_baju }}</td>                                        
                                    <td> {{ $i->lingkar_badan }}</td>                                        
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody> 
                @elseif($item->nama == 'celana panjang wanita')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lebar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Celana</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lebar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Celana</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }}</td>                                        
                                    <td> {{ $i->lebar_pundak }}</td>                                        
                                    <td> {{ $i->panjang_lengan }}</td>                                        
                                    <td> {{ $i->lingkar_pinggang }}</td>                                        
                                    <td> {{ $i->panjang_baju }}</td>                                        
                                    <td> {{ $i->lingkar_badan }}</td>                                        
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>  
                    @elseif($item->nama == 'rok wanita')
                    <thead>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lebar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Rok</th>
                            <th>Diinput</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ukuran Dalam cm</th>
                            <th>Lebar Pinggang</th>
                            <th>Lebar Pinggul</th>
                            <th>Lebar Paha</th>
                            <th>Lebar Bawah</th>
                            <th>Panjang Rok</th>
                            <th>Diinput</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($itemcount == 0)
                            <tr>
                                <td colspan="3"  class="text-center">
                                    <div class="alert alert-danger">Belum ada data.</div>
                                </td>
                            </tr>
                        @else
                            @foreach ($item->size as $i)
                                <tr>
                                    <td> {{ $i->ukuran_cm }}</td>                                        
                                    <td> {{ $i->lebar_pundak }}</td>                                        
                                    <td> {{ $i->panjang_lengan }}</td>                                        
                                    <td> {{ $i->lingkar_pinggang }}</td>                                        
                                    <td> {{ $i->panjang_baju }}</td>                                        
                                    <td> {{ $i->lingkar_badan }}</td>                                        
                                    <td>
                                        {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>  
                @endif            
            </table>
        </div>
    </div>
@endsection