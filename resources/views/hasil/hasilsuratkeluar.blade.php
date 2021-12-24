@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 ">
              <p class="text-start" id="judulhalaman">HASIL SURAT KELUAR</p>
            </div>
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
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sks as $sk)
                      <tr>
                        <td scope="col">{{$sk->nomor_surat}}</td>
                        <td scope="col">{{$sk->tanggal_surat}}</td>
                        <td scope="col">{{$sk->sifat_surat}}</td>
                        <td scope="col">{{$sk->perihal}}</td>
                        <td scope="col"><a href="{{route('downloadHasilSuratKeluar',$sk->file)}}">{{$sk->file}}</a></td>
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