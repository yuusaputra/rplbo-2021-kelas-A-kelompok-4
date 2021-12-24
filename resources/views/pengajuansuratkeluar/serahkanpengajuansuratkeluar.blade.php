@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Penyerahan Data Pengajuan Surat Keluar</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 500px">
            <form action="/serahkanpengajuansuratkeluar/{{$psk->id}}" class="p-5" method="POST">
              @csrf
              @method('PATCH')
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Pengetik</label>
                    <div class="col-sm-10" id="input">
                      <input value="{{$psk->nama_pengetik}}" type="text" class="form-control border border-dark" style="width: 568px" name="nama_pengetik" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                      <input value="{{$psk->nip}}" type="text" class="form-control border border-dark" style="width: 568px" name="nip" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Konsep Surat</label>
                    <div class="col-sm-10">
                      <input value="{{$psk->konsep}}" type="text" class="form-control border border-dark" style="width: 568px" name="konsep" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <a href="{{route('downloadPengajuanSuratKeluar',$psk->file)}}">
                        <input value="{{$psk->file}}" value="" type="text" class="form-control border border-dark" style="width: 568px" name="file" readonly>
                      </a>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Penyerahan Kepada</label>
                    @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                        <option value="Kepala Tata Usaha">Kepala Tata Usaha</option>
                      </select>
                    </div>
                    @endif
                    @if (auth()->user()->unit_kerja=="Kepala Tata Usaha")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                        <option value="Staf Administrasi Umum">Staf Administrasi Umum</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                      </select>
                    </div>
                    @endif
                    @if (auth()->user()->unit_kerja=="Kepala Sekolah")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                        <option value="Staf Administrasi Umum">Staf Administrasi Umum</option>
                      </select>
                    </div>
                    @endif
                </div>
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Catatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="catatan">
                      <div class="row mt-4">
                        <a href="" data-toggle="modal" data-target="#ModalSerahkanPengajuanSuratKeluar{{$psk->id}}">
                          <button type="button" class="btn btn-primary mr-3" style="width: 90px">Serahkan</button>
                        </a>
                        <a href="{{route('tampilpengajuansuratkeluar')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
                    </div>
                    </div>
                    @include('modal.serahkanpengajuansuratkeluar')
                  </div>
                  
            </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

