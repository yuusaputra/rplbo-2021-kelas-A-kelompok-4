@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">PENGAJUAN SURAT KELUAR</p>
            </div>
            @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
            <div class="col-sm-6 d-flex justify-content-end">
              <a href="{{route('tambahpengajuansuratkeluar')}}">
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
                        <th scope="col" class="align-text-top">Nama Pengetik</th>
                        <th scope="col" class="align-text-top">NIP</th>
                        <th scope="col" class="align-text-top">Konsep Surat</th>
                        <th scope="col" class="align-text-top">Aksi</th>
                        <th scope="col" class="align-text-top">Catatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($psks as $psk)
                      <tr>
                        <td scope="col">{{$psk->nama_pengetik}}</td>
                        <td scope="col">{{$psk->nip}}</td>
                        <td scope="col">{{$psk->konsep}}</td>
                        <td scope="col">
                          @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                          <div class="row">
                            <a href="/lihatpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-eye ml-2"></i>
                            </a>
                            <a href="/editpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-pencil-alt ml-2"></i>
                            </a>
                            <a href="" data-toggle="modal" data-target="#ModalDelete{{$psk->id}}">
                              <i class="fas fa-trash-alt ml-2"></i>
                            </a>
                            <a href="/serahkanpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-arrow-circle-right ml-2"></i>
                            </a>
                          </div>
                          @endif
                          @if (auth()->user()->unit_kerja=="Kepala Tata Usaha")
                          <div class="row">
                            <a href="/lihatpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-eye ml-2"></i>
                            </a>
                            <a href="/editpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-pencil-alt ml-2"></i>
                            </a>
                            <a href="/serahkanpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-arrow-circle-right ml-2"></i>
                            </a>
                          </div>
                          @endif
                          @if (auth()->user()->unit_kerja=="Kepala Sekolah")
                          <div class="row">
                            <a href="/lihatpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-eye ml-2"></i>
                            </a>
                            <a href="/editpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-pencil-alt ml-2"></i>
                            </a>
                            <a href="/serahkanpengajuansuratkeluar/{{$psk->id}}">
                              <i class="fas fa-arrow-circle-right ml-2"></i>
                            </a>
                          </div>
                          @endif
                          <td scope="col">{{$psk->catatan}}</td>
                        </td>
                        @include('modal.deletepengajuansuratkeluar')
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