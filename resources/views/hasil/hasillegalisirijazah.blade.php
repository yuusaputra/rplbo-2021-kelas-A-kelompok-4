@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">LEGALISIR IJAZAH</p>
            </div>
        <div class="col-sm-12">
            <div class="container" style="background-color: white">
                <table class="table table-bordered">
                    <thead style="background-color: #008DFF;">
                      <tr class="text-center">
                        <th scope="col" class="align-text-top">Nama Lengkap</th>
                        <th scope="col" class="align-text-top">TTL</th>
                        <th scope="col" class="align-text-top">NIS</th>
                        <th scope="col" class="align-text-top">Tahun Alumni</th>
                        <th scope="col" class="align-text-top">Tanggal Kunjungan</th>
                        <th scope="col" class="align-text-top">File</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ijazahs as $ijazah)
                    <tr>
                      <td scope="col">{{$ijazah->nama_lengkap}}</td>
                      <td scope="col">{{$ijazah->ttl}}</td>
                      <td scope="col">{{$ijazah->nis}}</td>
                      <td scope="col">{{$ijazah->tahun_alumni}}</td>
                      <td scope="col">{{$ijazah->tanggal_kunjungan}}</td>
                      <td scope="col"><a href="{{route('downloadHasilLegalisirIjazah',$ijazah->file)}}">{{$ijazah->file}}</a></td>
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