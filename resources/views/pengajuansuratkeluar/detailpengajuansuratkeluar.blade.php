@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Detail Pengajuan Surat Keluar</p>
        </div>
        <div class="container" style="background-color: white; width: 1070px;">
          <div class="row p-5">
            <div class="col-5 d-flex justify-content-center">
              <div class="card border-0 p-3" style="width: 18rem;">
                <i class="fas fa-envelope-open-text d-flex justify-content-center" style="font-size: 170px"></i>
                <div class="card-body d-flex justify-content-center">
                  <a href="{{route('downloadPengajuanSuratKeluar',$psk->file)}}">
                    <button class="btn btn-light">{{$psk->file}}</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-5 p-2">
              <table class="table table-borderless" style="width: 300px" id="tabellihat">
                <thead>
                  <tr>
                    <td class="field">Nama Pengetik</td>
                    <td></td>
                    <td>{{$psk->nama_pengetik}}</td>
                  </tr>
                  <tr>
                    <td class="field">NIP</td>
                    <td></td>
                    <td>{{$psk->nip}}</td>
                  </tr>
                  <tr>
                    <td class="field">Konsep Surat</td>
                    <td></td>
                    <td>{{$psk->konsep}}</td>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="row p-3 d-flex justify-content-end">
            <a href="{{route('tampilpengajuansuratkeluar')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
          </div>
          
      </div>

        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

