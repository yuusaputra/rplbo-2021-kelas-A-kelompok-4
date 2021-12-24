@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Penyerahan Data Pengajuan Surat Masuk</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 580px">
            <form action="/serahkanpengajuansuratmasuk/{{$psm->id}}" class="p-5" method="POST">
              @csrf
              @method('PATCH')
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10" id="input">
                      <input value="{{$psm->nama_pengirim}}" type="text" class="form-control border border-dark" style="width: 568px" name="nama_pengirim" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Asal Instansi</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->instansi}}" type="text" class="form-control border border-dark" style="width: 568px" name="instansi" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->jabatan}}" type="text" class="form-control border border-dark" style="width: 568px" name="jabatan" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->tanggal_kunjungan}}" type="date" class="form-control border border-dark" style="width: 568px" name="tanggal_kunjungan" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Isi Ringkasan Surat</label>
                    <div class="col-sm-10">
                      <input value="{{$psm->isi_ringkasan_surat}}" type="text" class="form-control border border-dark" style="width: 568px" name="isi_ringkasan_surat" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <a href="{{route('downloadPengajuanSuratMasuk',$psm->file)}}">
                        <input value="{{$psm->file}}" type="text" class="form-control border border-dark" style="width: 568px" name="file" readonly>
                      </a>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Penyerahan Kepada</label>
                    @if (auth()->user()->unit_kerja=="Resepsionis")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                          <option value="Staf Administrasi Umum">Staf Administrasi Umum</option>
                      </select>
                    </div>
                    @endif
                    @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                          <option value="Resepsionis">Resepsionis</option>
                      </select>
                    </div>
                    @endif
                </div>
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Catatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="catatan">
                      <div class="row mt-4">
                        <a href="" data-toggle="modal" data-target="#ModalSerahkanPengajuanSuratMasuk{{$psm->id}}">
                          <button type="button" class="btn btn-primary mr-3" style="width: 90px">Serahkan</button>
                        </a>
                        <a href="{{route('tampilpengajuansuratmasuk')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
                    </div>
                    </div>
                  </div>
                  @include('modal.serahkanpengajuansuratmasuk')
            </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

