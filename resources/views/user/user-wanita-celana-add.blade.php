@extends('layouts.default-user')

@section('content')
    <main>
        
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <form action="user-wanita-add" method="POST">
                            @csrf
                            <input type="hidden" id="user" value="{{ Auth::user()->nama }}" name="user">
                            <input type="hidden" id="kategori" value="Perempuan" name="kategori">
                            <input type="hidden" id="celana" value="1" name="celana">
                            <input type="hidden" id="baju" value="3" name="baju">
                            <input type="hidden" id="sepatu" value="4" name="sepatu">
                            <input type="hidden" id="topi" value="5" name="topi">
                            {{-- BAJU WANITA  --}}
                            <div class="card shadow-lg border-0 rounded-lg my-5" id="bajuPria">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Baju Wanita </h3>
                                </div>
                                <div class="card shadow-lg border-0 rounded-lg my-0">
                                    <div class="card-body">
                                        
                                        <div class="card" style="max-width: 700px;">
                                            <img id="img1" name="img1" src="img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja-Wanita-Non-Hijab-2XL.jpg" class="card-img-top" alt="...">
                                            <hr>
                                            <div class="card-body">
                                            
                                                <div class="mb-3">
                                                    <label for="package" class="form-label">1/2 Lingkar Badan</label>
                                                    @foreach ($item as $i)
                                                            @if ($i->nama == 'kemeja wanita')
                                                                @foreach ($i->size as $c)
                                                                    <input data-gambarbaju="{{ $c->cover }}"  data-lebarpundak="{{$c->lebar_pundak}}" data-panjangTangan="{{$c->panjang_tangan}}" data-setengahlingkaran="{{$c->setengah_lingkaran}}" data-panjangbaju="{{$c->panjang_baju}}" data-lebarpunggung="{{$c->lebar_punggung}}"  value="" type="text" class="form-control" id="package" style="width: 120px" >
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Keterangan</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <ol>
                                                                <li>Ukuran Cm</li>
                                                                <li>Panjang Baju</li>
                                                                <li>Panjang Tangan</li>
                                                                <li>Lebar Pundak</li>
                                                                <li>Lebar Punggung</li>
                                                            </ol>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label mb-3">Ukuran</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <ol>
                                                                <li><input readonly type="number" value="panjangbaju" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="panjangbajuTolerant" id="panjangbajuTolerant" value="0"/></li>
                                                                <li><input readonly type="number" value="panjangTangan" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="panjangTanganTolerant" id="panjangTanganTolerant"  value="0"/></li>
                                                                <li><input readonly type="number" value="lebarpundak"  style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpundakTolerant" id="lebarpundakTolerant"  value="0"/></li>
                                                                <li><input readonly type="number" value="lebarpunggung" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpunggungTolerant" id="lebarpunggungTolerant" value="0"/></li>
                                                                <li><input readonly type="number" value="setengahlingkaran" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="setengahlingkaranTolerant" id="setengahlingkaranTolerant"  value="0"/></li>
                                                                <br>
                                                            </ol>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Catatan</label>
                                                    <textarea class="form-control" id="catatanBaju" rows="3" name="catatanBaju"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary form-control" id="btnBajuPria">Next</button>
                                    
                                        <div class="card-footer text-center py-3">
                                            <div class="small"><a href="/user">kembali</a></div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            {{-- AHIR BAJU PRIA --}}

                            {{-- CELANA PRIA --}}
                            <div class="card shadow-lg border-0 rounded-lg my-5" id="celanaPria" hidden>
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Celana Panjang Wanita </h3>
                                </div>
                                <div class="card shadow-lg border-0 rounded-lg my-0">
                                    <div class="card-body">
                                        
                                        <div class="card" style="max-width: 700px;">
                                            <img id="img2" name="img2" src="img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB XS.jpg" class="card-img-top" alt="...">
                                            <hr>
                                            <div class="card-body">
                                            
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Lebar Pinggul</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" style="width: 120px" >
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Keterangan</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <ol>
                                                                <li>Ukuran Cm</li>
                                                                <li>Lebar Pinggang</li>
                                                                <li>Lebar Paha</li>
                                                                <li>Lebar Bawah</li>
                                                                <li>Panjang Celana</li>
                                                            </ol>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label mb-3">Ukuran</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <ol>
                                                                <li><input readonly type="number" value="ukurancm" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpinggulTolerant" id="lebarpinggulTolerant" value="0"/></li>
                                                                <li><input readonly type="number" value="lebarpinggang"  style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpinggangTolerant" id="lebarpinggangTolerant" value="0"/></li>
                                                                <li><input readonly type="number" value="lebarpaha" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpahaTolerant" id="lebarpahaTolerant" value="0"/></li>
                                                                <li><input readonly type="number" value="lebarbawah" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarbawahTolerant" id="lebarbawahTolerant" value="0"/></li>
                                                                <li><input readonly type="number" value="panjangcelana" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="panjangcelanaTolerant" id="panjangcelanaTolerant" value="0"/></li>
                                                                <br>
                                                            </ol>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Catatan</label>
                                                    <textarea class="form-control" id="catatanCelana" rows="3" name="catatanCelana" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary form-control" id="btnCelanaPria">Next</button>
                                    
                                        <div class="card-footer text-center py-3">
                                            <div class="small">
                                                <button type="button" id="idKembaliBajuPria">Kembali</button>
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            {{-- AHIR CELANA PRIA --}}

                            {{-- TOPI PRIA --}}
                            <div class="card shadow-lg border-0 rounded-lg my-5" id="topiPria" hidden>
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Topi Wanita </h3>
                                </div>
                                <div class="card shadow-lg border-0 rounded-lg my-0">
                                    <div class="card-body">
                                        
                                        <div class="card" style="max-width: 700px;">
                                            <img src="{{ asset('img/data-baju/Topi/'.$topi_pria->cover) }}" class="card-img-top" alt="...">
                                            <hr>
                                            <div class="card-body">
                                            
                                                <div class="mb-3">
                                                    <label  class="form-label">Ukuran Dalam CM</label>
                                                    
                                                    <select name="packageTopiPria" id="packageTopiPria"  class="form-control select-multiple" style="width: 55px">
                                                        <option value=""></option>
                                                        @foreach ($item as $i)
                                                        
                                                            @if ($i->nama == 'topi wanita') 
                                                                @foreach ($i->size as $c)
                                                                    <option name="{{ $c->ukuran_cm }}" value="{{ $c->ukuran_cm }}">{{ $c->ukuran_cm }}</option>
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" name="topi" id="topi" value="5">
                                                </div>
                                                
                                                
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Catatan</label>
                                                    <textarea class="form-control" id="catatanTopi" rows="3" name="catatanTopi" value={{old('catatanTopi')}}></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary form-control" id="btnTopiPria">Next</button>
                                    
                                        <div class="card-footer text-center py-3">
                                            <button type="button" id="idKembaliCelanaPria">Kembali</button>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            {{-- AHIR TOPI PRIA --}}

                            {{-- SEPATU --}}
                            <div class="card shadow-lg border-0 rounded-lg my-5" id="sepatuPria" hidden>
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Sepatu Wanita   </h3>
                                </div>
                                <div class="card shadow-lg border-0 rounded-lg my-0">
                                    <div class="card-body">
                                        
                                        <div class="card" style="max-width: 700px;">
                                            <img src="{{ asset('img/data-baju/Sepatu/'.$sepatu_pria->cover) }}" class="card-img-top" alt="...">
                                            <hr>
                                            <div class="card-body">
                                            
                                                <div class="mb-3">
                                                    <label  class="form-label">Ukuran Dalam CM</label>
                                                    <select name="packageSepatuPria" id="packageSepatuPria"  class="form-control select-multiple" style="width: 55px">
                                                        <option value=""></option>
                                                        @foreach ($item as $i)
                                                            @if ($i->nama == 'sepatu wanita') 
                                                                @foreach ($i->size as $c)
                                                                    <option name="{{ $c->ukuran_cm }}" value="{{ $c->ukuran_cm }}">{{ $c->ukuran_cm }}</option>
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </select>

                                                    
                                                </div>
                                                
                                                
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Catatan</label>
                                                    <textarea class="form-control" id="catatanSepatu" rows="3"  name="catatanSepatu" value={{old('catatanSepatu')}}></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <button type="button" class="btn btn-primary form-control" id="btnSepatuPria">Next</button>
                                    
                                        <div class="card-footer text-center py-3">
                                            <button type="button" id="idKembaliTopiPria">Kembali</button>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            {{-- AHIR SEPATU --}}

                            {{-- HASIL --}}
                            <div class="card shadow-lg border-0 rounded-lg my-5" id="hasil" hidden>
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Perembuan  Hasil</h3>
                                    
                                </div>
                                <div class="card shadow-lg border-0 rounded-lg my-0">
                                    <div class="card-body">
                                        
                                        <div class="card" style="max-width: 700px;">
                                            <div class="">
                                                <h5 class="text-center font-weight-light my-4">Baju Wanita  <input class="mb-3" readonly type="text" name="hasilBajuPria" style="width: 60px"  id="hasilBajuPria"></h5>
                                               
                                                <div class="row">
                                                    <div class="col">
                                                        <ol>
                                                            <li>Lebar Pundak</li>
                                                            <li>Panjang Tangan</li>
                                                            <li>Lingkar Pinggang</li>
                                                            <li>Panjang Baju</li>
                                                            <li>Lingkar Badan</li>
                                                        </ol>
                                                    </div>
                                                    <div class="col">
                                                        <ol style="list-style: none">
                                                            <li><input readonly type="number" value="lebarpundak"  style="width: 60px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpundakTolerant" id="lebarpundakTolerant"  value="0" readonly/></li>
                                                            <li><input readonly type="number" value="panjangTangan" style="width: 60px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="panjangTanganTolerant" id="panjangTanganTolerant"  value="0" readonly/></li>
                                                            <li><input readonly type="number" value="setengahlingkaran" style="width: 60px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="setengahlingkaranTolerant" id="setengahlingkaranTolerant" value="0" readonly/></li>
                                                            <li><input readonly type="number" value="panjangbaju" style="width: 60px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="panjangbajuTolerant" id="panjangbajuTolerant" value="0" readonly/></li>
                                                            <li><input readonly type="number" value="lebarpunggung" style="width: 60px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpunggungTolerant" id="lebarpunggungTolerant" value="0" readonly/></li>
                                                            <br>
                                                        </ol>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="mb-3">
                                                
                                                <div class="row">
                                                    
                                                </div>                                                
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Catatan</label>
                                                <textarea  class="form-control" id="catatanBaju" rows="3"  name="catatanBaju" value="cek" readonly>cek</textarea>
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <h5 class="text-center font-weight-light my-4">Celana Wanita  <input readonly style="width: 50px" type="text" name="hasilCelanaPria" id="hasilCelanaPria"></h5>
                                                <div class="row">
                                                    <div class="col">
                                                        <ol>
                                                            <li>Lebar Pinggang</li>
                                                            <li>Lebar Pinggul</li>
                                                            <li>Lebar Paha</li>
                                                            <li>Lebar Bawah</li>
                                                            <li>Panjang Celana</li>
                                                        </ol>
                                                    </div>
                                                    <div class="col">
                                                        <ol style="list-style: none">
                                                            <li><input readonly type="number" value="lebarpinggang"  style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpinggangTolerant" id="lebarpinggangTolerant" value="0" readonly/></li>
                                                            <li><input readonly type="number" value="lebarpinggul" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpinggulTolerant" id="lebarpinggulTolerant" value="0" readonly/></li>
                                                            <li><input readonly type="number" value="lebarpaha" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarpahaTolerant" id="lebarpahaTolerant" value="0" readonly/></li>
                                                            <li><input readonly type="number" value="lebarbawah" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="lebarbawahTolerant" id="lebarbawahTolerant" value="0" readonly/></li>
                                                            <li><input readonly type="number" value="panjangcelana" style="width: 55px"/> <input type="number" min="-5" max="5"  style="width: 50px" name="panjangcelanaTolerant" id="panjangcelanaTolerant" value="0" readonly/></li>
                                                            <br>
                                                        </ol>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Catatan</label>
                                                <textarea  class="form-control" id="catatanCelana" rows="3"   readonly></textarea>
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <h5 class="text-center font-weight-light my-4">Topi Wanita   <input class="mb-3" readonly style="width: 50px" type="text"  id="hasilTopiPria"> </h5>                                            
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Catatan</label>
                                                <textarea  class="form-control" id="catatanTopi" rows="3"    readonly></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="text-center font-weight-light my-4">Sepatu Wanita  <input class="mb-3" readonly style="width: 50px" type="text" id="hasilSepatuPria"></h5>                                              
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Catatan</label>
                                                <textarea  class="form-control" id="catatanSepatu" rows="3"  readonly></textarea>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary form-control" id="btnHasil">Next</button>
                                        <div class="card-footer text-center py-3">
                                            <button type="button" id="idKembaliSepatu">Kembali</button>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            {{-- HASIL--}}
                        </form>

                    </div>
                
            </div>
        </div>
    </main>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    // kemeja pria
		$('#package').on('change', function(){
        // ambil data dari elemen option yang dipilih
        const lebarpundak = $('#package option:selected').data('lebarpundak');
        const panjangTangan = $('#package option:selected').data('panjangtangan');
        const setengahlingkaran = $('#package option:selected').data('setengahlingkaran');
        const panjangbaju = $('#package option:selected').data('panjangbaju');
        const lebarpunggung = $('#package option:selected').data('lebarpunggung');
        const gambarbaju = $('#package option:selected').data('gambarbaju');
        
        // tampilkan data ke element
        $('[value=lebarpundak]').val(lebarpundak);
        $('[value=panjangTangan]').val(panjangTangan);
        $('[value=setengahlingkaran]').val(setengahlingkaran);
        $('[value=panjangbaju]').val(panjangbaju);
        $('[value=lebarpunggung]').val(lebarpunggung);

        $("#img1").attr("src", gambarbaju);  
        
        const pilih = $('#package option:selected').val()
        $("input#hasilBajuPria").val(pilih);
        
        });
    // ahir kemeja pria

    // celana pria
    $('#packageCelanaPria').on('change', function(){
        // ambil data dari elemen option yang dipilih
        const lebarpinggang = $('#packageCelanaPria option:selected').data('lebarpinggang');
        const lebarpinggul = $('#packageCelanaPria option:selected').data('lebarpinggul');
        const lebarpaha = $('#packageCelanaPria option:selected').data('lebarpaha');
        const lebarbawah = $('#packageCelanaPria option:selected').data('lebarbawah');
        const panjangcelana = $('#packageCelanaPria option:selected').data('panjangcelana');
        const gambarcelana = $('#packageCelanaPria option:selected').data('gambarcelana');
        
        // tampilkan data ke element
        $('[value=lebarpinggang]').val(lebarpinggang);
        $('[value=lebarpinggul]').val(lebarpinggul);
        $('[value=lebarpaha]').val(lebarpaha);
        $('[value=lebarbawah]').val(lebarbawah);
        $('[value=panjangcelana]').val(panjangcelana);

        $("#img2").attr("src", gambarcelana);  

        const pilih = $('#packageCelanaPria option:selected').val();
        $("input#hasilCelanaPria").val(pilih);
    });
    // ahir celana pria

    // topi hasil
    $('#packageTopiPria').on('change', function(){
        const pilih = $('#packageTopiPria option:selected').val();
        $("input#hasilTopiPria").val(pilih);
    });
    // sepatu hasil
    $('#packageSepatuPria').on('change', function(){
        const pilih = $('#packageSepatuPria option:selected').val();
        $("input#hasilSepatuPria").val(pilih);
    });
    // catatan
    const catatanBaju = $('textarea#catatanBaju').val();
    $("textarea#catatanBaju").val(catatanBaju);
    
    // tolerant baju
    $('#lebarpundakTolerant').on('change', function() {
        const lebarpundakTolerant = $("input#lebarpundakTolerant").val();
        $("input#lebarpundakTolerant").val(lebarpundakTolerant);
    });
    $('#panjangTanganTolerant').on('change', function() {
        const panjangTanganTolerant = $("input#panjangTanganTolerant").val();
        $("input#panjangTanganTolerant").val(panjangTanganTolerant);
    });
    $('#setengahlingkaranTolerant').on('change', function() {
        const setengahlingkaranTolerant = $("input#setengahlingkaranTolerant").val();
        $("input#setengahlingkaranTolerant").val(setengahlingkaranTolerant);
    });
    $('#panjangbajuTolerant').on('change', function() {
        const panjangbajuTolerant = $("input#panjangbajuTolerant").val();
        $("input#panjangbajuTolerant").val(panjangbajuTolerant);
    });
    $('#lebarpunggungTolerant').on('change', function() {
        const lebarpunggungTolerant = $("input#lebarpunggungTolerant").val();
        $("input#lebarpunggungTolerant").val(lebarpunggungTolerant);
    });


    // tolerant celana
     
    $('#lebarpinggulTolerant').on('change', function() {
        const lebarpinggulTolerant = $("input#lebarpinggulTolerant").val();
        $("input#lebarpinggulTolerant").val(lebarpinggulTolerant);
    });
    $('#lebarpahaTolerant').on('change', function() {
        const lebarpahaTolerant = $("input#lebarpahaTolerant").val();
        $("input#lebarpahaTolerant").val(lebarpahaTolerant);
    });
    $('#lebarbawahTolerant').on('change', function() {
        const lebarbawahTolerant = $("input#lebarbawahTolerant").val();
        $("input#lebarbawahTolerant").val(lebarbawahTolerant);
    });
    $('#panjangcelanaTolerant').on('change', function() {
        const panjangcelanaTolerant = $("input#panjangcelanaTolerant").val();
        $("input#panjangcelanaTolerant").val(panjangcelanaTolerant);
    });
    
    // komen
    $('#catatanBaju').on('change', function() {
        const catatanBaju = $("textarea#catatanBaju").val();
        $("textarea#catatanBaju").val(catatanBaju);
    });
    $('#catatanCelana').on('change', function() {
        const catatanCelana = $("textarea#catatanCelana").val();
        $("textarea#catatanCelana").val(catatanCelana);
    });
    $('#catatanTopi').on('change', function() {
        const catatanTopi = $("textarea#catatanTopi").val();
        $("textarea#catatanTopi").val(catatanTopi);
    });
    $('#catatanSepatu').on('change', function() {
        const catatanSepatu = $("textarea#catatanSepatu").val();
        $("textarea#catatanSepatu").val(catatanSepatu);
    });

	</script>

    <script>
        // baju pria
        document.getElementById("btnBajuPria").addEventListener(
            "click",
            () => {
                    document.getElementById("bajuPria").hidden = true;
                    document.getElementById("celanaPria").hidden = false;
            },
            false
        );
        // kembali baju pria
        document.getElementById("idKembaliBajuPria").addEventListener(
            "click",
            () => {
                document.getElementById("celanaPria").hidden = true;
                    document.getElementById("bajuPria").hidden = false;
            },
            false
        );
        // celana pria
        document.getElementById("btnCelanaPria").addEventListener(
                "click",
                () => {
                    document.getElementById("celanaPria").hidden = true;
                    document.getElementById("topiPria").hidden = false;
            },
            false
        );
        // kembali celana pria
        document.getElementById("idKembaliCelanaPria").addEventListener(
            "click",
            () => {
                    document.getElementById("celanaPria").hidden = false;
                    document.getElementById("topiPria").hidden = true;
            },
            false
        );
        // topi pria
        document.getElementById("btnTopiPria").addEventListener(
                "click",
                () => {
                    document.getElementById("topiPria").hidden = true;
                    document.getElementById("sepatuPria").hidden = false;
            },
            false
        );
        // kembali topi pria
        document.getElementById("idKembaliTopiPria").addEventListener(
            "click",
            () => {
                    document.getElementById("topiPria").hidden = false;
                    document.getElementById("sepatuPria").hidden = true;
            },
            false
        );
         // sepatu pria
         document.getElementById("btnSepatuPria").addEventListener(
                "click",
                () => {
                    document.getElementById("sepatuPria").hidden = true;
                    document.getElementById("hasil").hidden = false;
            },
            false
        );
         // kembali hasil
         document.getElementById("idKembaliSepatu").addEventListener(
                "click",
                () => {
                    document.getElementById("sepatuPria").hidden = false;
                    document.getElementById("hasil").hidden = true;
            },
            false
        );
        
    </script>
        
@endsection
