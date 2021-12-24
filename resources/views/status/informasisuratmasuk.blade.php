@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-5">
            <p class="text-start" id="judulhalaman">Informasi Surat Masuk</p>
        </div>
        <div class="col-sm-5 d-flex justify-content-end">
            <a href="{{route('statussuratmasuk')}}">
              <button class="btn btn-secondary" style="width: 120px; height: 38px"><i class="fas fa-chevron-left mr-2"></i> Kembali</button>
            </a>
        </div>
          
        <div class="container" style="background-color: white; width: 1070px; height: 400px">
            <div class="row d-flex justify-content-end p-3" style="font-family: 'Inter', sans-serif;">
                Tanggal Surat : {{date('d-m-Y', strtotime($sm->tanggal_surat))}}
            </div>
            <div class="row d-flex justify-content-center p-3">
                <i class="fas fa-envelope-open-text d-flex justify-content-center" style="font-size: 170px"></i>
            </div>
            <div class="row d-flex justify-content-center" style="font-size: 12px; font-family: 'Inter', sans-serif;
            ">
                {{$sm->nomor_surat}}
            </div>
            <div class="row d-flex justify-content-center mt-2" style="font-family: 'Inter', sans-serif;">
                <u>{{$sm->perihal}}</u>
            </div>
            <div class="row d-flex justify-content-center mt-5">
                <p style="font-size: 18px"><i><span>Sedang dikelola oleh</span><span><b> {{$sm->penyerahan_kepada}}</b></span></i></p>
            </div>
        </div>

      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

