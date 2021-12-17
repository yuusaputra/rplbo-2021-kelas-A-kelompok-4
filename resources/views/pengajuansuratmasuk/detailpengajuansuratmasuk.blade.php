@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Form Detail Data</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 500px">
            <form action="" class="p-5">
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10" id="input">
                      <input value="{{$psm->nama_pengirim}}" type="text" class="form-control border border-dark" style="width: 568px" name="nama_pengirim">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Asal Instansi</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->instansi}}" type="text" class="form-control border border-dark" style="width: 568px" name="instansi">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->jabatan}}" type="text" class="form-control border border-dark" style="width: 568px" name="jabatan">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->tanggal_kunjungan}}" type="date" class="form-control border border-dark" style="width: 568px" name="tanggal_kunjungan">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Isi Ringkasan Surat</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->isi_ringkasan_surat}}" type="text" class="form-control border border-dark" style="width: 568px" name="isi_ringkasan_surat">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->file}}" type="text" class="form-control border border-dark" style="width: 568px" name="file">
                      <div class="row mt-4">
                        <a href="{{route('tampilpengajuansuratmasuk')}}"><button type="button" class="btn btn-danger" style="width: 90px">Kembali</button></a>
                    </div>
                    </div>
                    
                    </div>
                  </div>
            </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

