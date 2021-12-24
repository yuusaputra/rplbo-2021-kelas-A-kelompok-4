@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Penyerahan Data Surat Keluar</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 500px">
            <form action="/serahkansuratkeluar/{{$sk->id}}" class="p-5" method="POST">
              @csrf
              @method('PATCH')
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nomor Surat</label>
                    <div class="col-sm-10" id="input">
                      <input value="{{$sk->nomor_surat}}" type="text" class="form-control border border-dark" style="width: 568px" name="nomor_surat" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-10">
                      <input value="{{$sk->tanggal_surat}}" type="date" class="form-control border border-dark" style="width: 568px" name="tanggal_surat" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Sifat Surat</label>
                    <div class="col-sm-10">
                      <input value="{{$sk->sifat_surat}}" type="text" class="form-control border border-dark" style="width: 568px" name="sifat_surat" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Perihal</label>
                    <div class="col-sm-10">
                      <input value="{{$sk->perihal}}" type="text" class="form-control border border-dark" style="width: 568px" name="perihal" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <a href="{{route('downloadSuratKeluar',$sk->file)}}">
                        <input value="{{$sk->file}}" type="text" class="form-control border border-dark" style="width: 568px" name="file" readonly>
                      </a>
                    </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-sm-2 col-form-label">Penyerahan Kepada</label>
                        <div class="col-sm-10">
                        <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                            <option value="Resepsionis">Resepsionis</option>
                        </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-sm-2 col-form-label">Catatan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border border-dark" style="width: 568px" name="catatan">
                          <div class="row mt-4">
                            <a href="" data-toggle="modal" data-target="#ModalSerahkanSuratKeluar{{$sk->id}}">
                              <button type="button" class="btn btn-primary mr-3" style="width: 90px">Serahkan</button>
                            </a>
                            <a href="{{route('tampilsuratkeluar')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
                        </div>
                        </div>
                      </div>
                  </div>
                  @include('modal.serahkansuratkeluar')
            </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

