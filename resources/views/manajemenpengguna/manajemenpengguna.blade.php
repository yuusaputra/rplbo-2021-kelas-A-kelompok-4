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
                    @foreach ($users as $user)
                    <tr>
                      
                        <td scope="col">{{$user->username}}</td>
                        <td scope="col">{{$user->nama}}</td>
                        <td scope="col">{{$user->unit_kerja}}</td>
                        <td scope="col">
                          <div class="row align-items-center">
                            <a href="/lihatpengguna/{{$user->id}}"><i class="fas fa-eye "></i></a>
                            <a href="/editpengguna/{{$user->id}}">
                              <i class="fas fa-pencil-alt ml-2"></i>
                            </a>
                            <a href="" data-toggle="modal" data-target="#ModalDelete{{$user->id}}">
                              <i class="fas fa-trash-alt ml-2"></i>
                            </a>
                          </div>
                          @include('modal.deletepengguna')
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