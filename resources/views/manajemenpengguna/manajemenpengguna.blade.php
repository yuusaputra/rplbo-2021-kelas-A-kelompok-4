@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row align-items-center justify-content-around">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">MANAJEMEN PENGGUNA</p>
            </div>
            <div class="col-sm-6 d-flex justify-content-end">
              <a href="{{route('tambahpengguna')}}">
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
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Unit Kerja</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="col">RPS1</td>
                        <td scope="col">M. Khoirun Siddik</td>
                        <td scope="col">Resepsionis</td>
                        <td scope="col">
                          <a href="{{route('editpengguna')}}">
                            <img src="{{asset('image/edit.png')}}" alt="">
                          </a>
                          <a href="#">
                            <img src="{{asset('image/hapus.png')}}" alt="">
                          </a>
                        </td>
                            
                    </tr>
                    </tbody>
                  </table>
            </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection