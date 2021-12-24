@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">PENGAJUAN SURAT MASUK</p>
            </div>
            @if (auth()->user()->unit_kerja=="Resepsionis")
            <div class="col-sm-6 d-flex justify-content-end">
              <a href="{{route('tambahpengajuansuratmasuk')}}">
                  <button type="button" class="btn btn-primary" style="width: 207px; height: 41px">
                      <img src="{{asset('image/tambah.png')}}" class="mr-3" alt="" style="width: 23px; height: 23px"><b>Tambahkan Data</b>
                  </button>
              </a>
            </div>
            @endif
        <div class="col-sm-12">
            <div class="container" style="background-color: white">
                <table class="table table-bordered">
                    <thead style="background-color: #008DFF;">
                      <tr class="text-center">
                        <th scope="col" class="align-text-top">Nama Lengkap</th>
                        <th scope="col" class="align-text-top">Asal Instansi</th>
                        <th scope="col" class="align-text-top">Jabatan</th>
                        <th scope="col" class="align-text-top">Tanggal Kunjungan</th>
                        <th scope="col" class="align-text-top">Isi Ringkasan Surat</th>
                        <th scope="col" class="align-text-top">Aksi</th>
                        <th scope="col" class="align-text-top" >Catatan</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($psms as $psm)
                    <tr>
                      <td scope="col">{{$psm->nama_pengirim}}</td>
                      <td scope="col">{{$psm->instansi}}</td>
                      <td scope="col">{{$psm->jabatan}}</td>
                      <td scope="col">{{$psm->tanggal_kunjungan}}</td>
                      <td scope="col">{{$psm->isi_ringkasan_surat}}</td>
                      <td scope="col">
                        @if (auth()->user()->unit_kerja=="Resepsionis")
                        <div class="row">
                          <a href="/lihatpengajuansuratmasuk/{{$psm->id}}">
                            <i class="fas fa-eye ml-2"></i>
                          </a>
                          <a href="/editpengajuansuratmasuk/{{$psm->id}}">
                            <i class="fas fa-pencil-alt ml-2"></i>
                          </a>
                          <a href="" data-toggle="modal" data-target="#ModalDelete{{$psm->id}}">
                            <i class="fas fa-trash-alt ml-2"></i>
                          </a>
                          <a href="/serahkanpengajuansuratmasuk/{{$psm->id}}">
                            <i class="fas fa-arrow-circle-right ml-2"></i>
                          </a>
                        </div>
                        @endif

                        @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                        <div class="row">
                        <a href="/lihatpengajuansuratmasuk/{{$psm->id}}">
                          <i class="fas fa-eye ml-2"></i>
                        </a>
                        <a href="/serahkanpengajuansuratmasuk/{{$psm->id}}">
                          <i class="fas fa-arrow-circle-right ml-2 mr-2"></i>
                        </a>
                        </div>
                        @endif
                        @include('modal.deletepengajuansuratmasuk')
                      </td>
                      <td scope="col">{{$psm->catatan}}</td>
                          
                  </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
            </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection