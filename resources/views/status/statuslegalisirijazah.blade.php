@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">STATUS LEGALISIR IJAZAH</p>
            </div>
        <div class="col-sm-12">
            <div class="container" style="background-color: white">
                <table class="table table-bordered">
                    <thead style="background-color: #008DFF;">
                      <tr class="text-center">
                        <th scope="col" class="align-text-top">Nama Lengkap</th>
                        <th scope="col" class="align-text-top">Tahun Alumni</th>
                        <th scope="col" class="align-text-top">Tanggal Kunjungan</th>
                        <th scope="col" class="align-text-top">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ijazahs as $ijazah)
                      <tr>
                        <td scope="col">{{$ijazah->nama_lengkap}}</td>
                        <td scope="col">{{$ijazah->tahun_alumni}}</td>
                        <td scope="col">{{$ijazah->tanggal_kunjungan}}</td>
                        <td scope="col">
                            <a href="/informasilegalisirijazah/{{$ijazah->id}}">
                              <i class="fas fa-eye ml-2"></i>
                            </a>

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