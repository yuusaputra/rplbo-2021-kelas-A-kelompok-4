@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">DATA SURAT KELUAR</p>
            </div>
            @if (auth()->user()->unit_kerja=="Staf Administrasi Umum")
            <div class="col-sm-6 d-flex justify-content-end">
              <a href="{{route('tambahsuratkeluar')}}">
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
                        <th scope="col" class="align-text-top">Nomor Surat</th>
                        <th scope="col" class="align-text-top">Tanggal Surat</th>
                        <th scope="col" class="align-text-top">Sifat Surat</th>
                        <th scope="col" class="align-text-top">Perihal</th>
                        <th scope="col" class="align-text-top">File Surat</th>
                        <th scope="col" class="align-text-top">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sks as $sk)
                      <tr>
                        <td scope="col">{{$sk->nomor_surat}}</td>
                        <td scope="col">{{$sk->tanggal_surat}}</td>
                        <td scope="col">{{$sk->sifat_surat}}</td>
                        <td scope="col">{{$sk->perihal}}</td>
                        <td scope="col">{{$sk->file}}</td>
                        <td scope="col">
                          <div class="row">
                            <a href="/lihatsuratkeluar/{{$sk->id}}">
                              <i class="fas fa-eye ml-2"></i>
                            </a>
                            <a href="/editsuratkeluar/{{$sk->id}}">
                              <i class="fas fa-pencil-alt ml-2"></i>
                            </a>
                            <a href="" data-toggle="modal" data-target="#ModalDelete{{$sk->id}}">
                              <i class="fas fa-trash-alt ml-2"></i>
                            </a>
                            <a href="/serahkansuratkeluar/{{$sk->id}}">
                              <i class="fas fa-arrow-circle-right ml-2"></i>
                            </a>
                          </div>
                          
                        </td>
                      @include('modal.deletesuratkeluar')
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