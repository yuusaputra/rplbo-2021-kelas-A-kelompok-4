@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Form Tambah Data</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 500px">
            <form action="/tambahlegalisirijazah" class="p-5" method="POST">
              @csrf
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10" id="input">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="nama_lengkap">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">TTL</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control border border-dark" style="width: 568px" name="ttl">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="nis">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Tahun Alumni</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="tahun_alumni">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control border border-dark" style="width: 568px" name="tanggal_kunjungan">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control border border-dark" style="width: 568px" name="file">
                      <div class="row mt-4">
                        <button type="submit" class="btn btn-primary mr-3" style="width: 90px">Simpan</button>
                        <a href="{{route('tampillegalisirijazah')}}"><button type="button" class="btn btn-danger" style="width: 90px">Cancel</button></a>
                    </div>
                    </div>
                    
                    </div>
                  </div>
            </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

