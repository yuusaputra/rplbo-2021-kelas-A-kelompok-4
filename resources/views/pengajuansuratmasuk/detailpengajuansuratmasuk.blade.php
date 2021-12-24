@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Detail Pengajuan Surat Masuk</p>
        </div>
        <div class="container" style="background-color: white; width: 1070px;">
            <div class="row p-5">
              <div class="col-5 d-flex justify-content-center">
                <div class="card border-0 p-3" style="width: 18rem;">
                  <i class="fas fa-envelope-open-text d-flex justify-content-center" style="font-size: 170px"></i>
                  <div class="card-body d-flex justify-content-center">
                    <a href="{{route('downloadPengajuanSuratMasuk',$psm->file)}}">
                      <button class="btn btn-light">{{$psm->file}}</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-5 p-2">
                <table class="table table-borderless" id="tabellihat" style="width: 500px">
                  <thead>
                    <tr>
                      <td class="field">Nama Lengkap</td>
                      <td></td>
                      <td>{{$psm->nama_pengirim}}</td>
                    </tr>
                    <tr>
                      <td class="field">Asal Instansi</td>
                      <td></td>
                      <td>{{$psm->instansi}}</td>
                    </tr>
                    <tr>
                      <td class="field">Jabatan</td>
                      <td></td>
                      <td>{{$psm->jabatan}}</td>
                    </tr>
                    <tr>  
                      <td class="field">Tanggal Kunjungan</td>
                      <td></td>
                      <td>{{$psm->tanggal_kunjungan}}</td>
                    </tr>
                    <tr>
                      <td class="field">Isi Ringkasan Surat</td>
                      <td></td>
                      <td>{{$psm->isi_ringkasan_surat}}</td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class="row p-3 d-flex justify-content-end">
              <a href="{{route('tampilpengajuansuratmasuk')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
            </div>
            
        </div>

      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

