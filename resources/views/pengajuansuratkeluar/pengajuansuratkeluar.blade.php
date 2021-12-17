@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row align-items-center justify-content-around">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">PENGAJUAN SURAT KELUAR</p>
            </div>
            <div class="col-sm-6 d-flex justify-content-end">
              <a href="{{route('tambahpengajuansuratkeluar')}}">
                  <button type="button" class="btn btn-primary" style="width: 207px; height: 41px">
                      <img src="{{asset('image/tambah.png')}}" class="mr-3" alt="" style="width: 23px; height: 23px"><b>Tambahkan Data</b>
                  </button>
              </a>
            </div>
        <div class="col-sm-12">
            <div class="container" style="background-color: white">
                <table class="table table-bordered">
                    <thead style="background-color: #008DFF;">
                      <tr>
                        <th scope="col">Nama Pengetik</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Konsep Surat</th>
                        <th scope="col">File Surat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($psks as $psk)
                      <tr>
                        <td scope="col">{{$psk->nama_pengetik}}</td>
                        <td scope="col">{{$psk->nip}}</td>
                        <td scope="col">{{$psk->konsep}}</td>
                        <td scope="col">{{$psk->file}}</td>
                        <td scope="col">
                          <div class="row">
                            <a href="/editpengajuansuratkeluar/{{$psk->id}}">
                              <img src="{{asset('image/edit.png')}}" alt="">
                            </a>
                            <a href="/lihatpengajuansuratkeluar/{{$psk->id}}">
                              <img src="{{asset('image/lihat.png')}}" alt="">
                            </a>
                            <form action="/deletepengajuansuratkeluar/{{$psk->id}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button style="border: none; outline:none; background-color: white">
                                  <img src="{{asset('image/hapus.png')}}" alt="">
                              </button>
                            </form>
                            <a href="/serahkanpengajuansuratkeluar/{{$psk->id}}">
                              <img src="{{asset('image/serah.png')}}" alt="">
                            </a>
                          </div>
                          
                        </td>
                            
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