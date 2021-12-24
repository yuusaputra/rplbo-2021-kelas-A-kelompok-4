@extends('layouts.template')

@section('content')
<section class="content-header">
  
    <div class="container-fluid mt-4">
      
      <div class="row mb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="text-start" id="judulhalaman">STATUS SURAT MASUK</p>
            </div>

        <div class="col-sm-12">
            <div class="container" style="background-color: white">
                <table class="table table-bordered">
                    <thead style="background-color: #008DFF;">
                      <tr class="text-center">
                        <th scope="col" class="align-text-top">Nomor Surat</th>
                        <th scope="col" class="align-text-top">Perihal</th>
                        <th scope="col" class="align-text-top">Tanggal Surat</th>
                        <th scope="col" class="align-text-top">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sms as $sm)
                      <tr>
                        <td scope="col">{{$sm->nomor_surat}}</td>
                        <td scope="col">{{$sm->perihal}}</td>
                        <td scope="col">{{$sm->tanggal_surat}}</td>
                        <td scope="col">
                            <a href="/informasisuratmasuk/{{$sm->id}}">
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