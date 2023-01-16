@extends('layouts.default-user')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg my-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Informasi Karyawan</h3></div>
                        <div class="card-body">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nip" name="nip" required type="text" readonly placeholder="123456" value="{{ Auth::user()->nip }}" />
                                    <label for="nip">NIP</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input style="text-transform: capitalize" class="form-control" id="nama" name="nama" required type="text" readonly placeholder="123456" value="{{ Auth::user()->nama }}" />
                                    <label for="nama">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="pangkat" name="pangkat" required type="text" readonly placeholder="123456" value="{{ Auth::user()->pangkat }}" />
                                    <label for="pangkat">Pangkat</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input style="text-transform: uppercase" class="form-control" id="satker" name="satker" required type="text" readonly placeholder="123456" value="{{ Auth::user()->satker }}" />
                                    <label for="satker">SaKer</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input style="text-transform: uppercase" class="form-control" id="jabatan" name="jabatan" required type="text" readonly placeholder="123456" value="{{ Auth::user()->jabatan }}" />
                                    <label for="jabatan">Jabatan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    @if (Auth::user()->jk == 'l')
                                        <input style="text-transform: capitalize" class="form-control" id="jk" name="jk" required type="text" readonly placeholder="123456" value="Laki-laki" />
                                    @else
                                        <input style="text-transform: capitalize" class="form-control" id="jk" name="jk" required type="text" readonly placeholder="123456" value="Perempuan" />
                                    @endif
                                    <label for="jk">Jenis Kelamin</label>
                                </div>
                                    @if (Auth::user()->jk == 'l')
                                        <a href="user-pria-add" class="btn btn-primary form-control">Next</a>
                                    @elseif(Auth::user()->jk == 'p')
                                    <form action="user-pilih" method="POST">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            
                                            <select class="form-select" id="pilih" name="pilih" aria-label="Default select example">
                                                @foreach ($kategori as $k)
                                                    @if ($k->nama != 'l')
                                                            <option value="{{ $k->nama}}">{{$k->ket}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label for="pilih">Pilih Kategori</label>
                                        </div>


                                        <div class="form-floating mb-3 myDiv"  id="showp" name="showp">
                                            <select class="form-select" name="show" aria-label="Default select example" >
                                                <option value="rok">Rok</option>
                                                <option value="celanaPanjang">Celana Panjang</option>
                                            </select>
                                            <label for="show">Pilih</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary form-control">Next</button>                                       
                                    </form>
                                    @endif
                                <div class="card-footer text-center py-3">
                                <div class="small"><a href="logout">logout</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#pilih').on('change', function(){
                var demovalue = $(this).val(); 
                $("div.myDiv").hide();
                $("#show"+demovalue).show();
            });
        });
    </script>
@endsection
