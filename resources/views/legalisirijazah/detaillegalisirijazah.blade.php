@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Detail Legalisir Ijazah</p>
        </div>
        <div class="container" style="background-color: white; width: 1070px;">
          <div class="row p-5">
            <div class="col-5 d-flex justify-content-center">
              <div class="card border-0 p-3" style="width: 18rem;">
                <i class="fas fa-envelope-open-text d-flex justify-content-center" style="font-size: 170px"></i>
                <div class="card-body d-flex justify-content-center">
                  <a href="{{route('downloadPengajuanSuratKeluar',$ijazah->file)}}">
                    <button class="btn btn-light">{{$ijazah->file}}</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-5 p-2">
              <table class="table table-borderless" style="width: 500px" id="tabellihat">
                <thead>
                  <tr>
                    <td class="field">Nama Lengkap</td>
                    <td></td>
                    <td>{{$ijazah->nama_lengkap}}</td>
                  </tr>
                  <tr>
                    <td class="field">TTL</td>
                    <td></td>
                    <td>{{$ijazah->ttl}}</td>
                  </tr>
                  <tr>
                    <td class="field">NIS</td>
                    <td></td>
                    <td>{{$ijazah->nis}}</td>
                  </tr>
                  <tr>
                    <td class="field">Tahun Alumni</td>
                    <td></td>
                    <td>{{$ijazah->tahun_alumni}}</td>
                  </tr>
                  <tr>
                    <td class="field">Tanggal Kunjungan</td>
                    <td></td>
                    <td>{{$ijazah->tanggal_kunjungan}}</td>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="row p-3 d-flex justify-content-end">
            <a href="{{route('tampillegalisirijazah')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
          </div>
          
      </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

