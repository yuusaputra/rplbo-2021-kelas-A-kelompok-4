@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Detail Data Surat Masuk</p>
        </div>
        <div class="container" style="background-color: white; width: 1070px;">
          <div class="row p-5">
            <div class="col-5 d-flex justify-content-center">
              <div class="card border-0 p-3" style="width: 18rem;">
                <i class="fas fa-envelope-open-text d-flex justify-content-center" style="font-size: 170px"></i>
                <div class="card-body d-flex justify-content-center">
                  <a href="{{route('downloadSuratMasuk',$sm->file)}}">
                    <button class="btn btn-light">{{$sm->file}}</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-5 p-2">
              <table class="table table-borderless" id="tabellihat" style="width: 500px">
                <thead>
                  <tr>
                    <td class="field">Nomor Surat</td>
                    <td></td>
                    <td>{{$sm->nomor_surat}}</td>
                  </tr>
                  <tr>
                    <td class="field">Tanggal Surat</td>
                    <td></td>
                    <td>{{$sm->tanggal_surat}}</td>
                  </tr>
                  <tr>
                    <td class="field">Sifat Surat</td>
                    <td></td>
                    <td>{{$sm->sifat_surat}}</td>
                  </tr>
                  <tr>
                    <td class="field">Perihal</td>
                    <td></td>
                    <td>{{$sm->perihal}}</td>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="row p-3 d-flex justify-content-end">
            <a href="{{route('tampilsuratmasuk')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
          </div>
          
      </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

