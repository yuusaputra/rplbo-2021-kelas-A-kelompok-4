@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Form Tambah Pengajuan Surat Keluar</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 500px">
            <form action="/tambahpengajuansuratkeluar" class="p-5" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Pengetik</label>
                    <div class="col-sm-10" id="input">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="nama_pengetik" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="nip" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Konsep Surat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="konsep" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control border border-dark" style="width: 568px" name="file" required>
                      <div class="row mt-4">
                        <button type="submit" class="btn btn-primary mr-3" style="width: 90px">Simpan</button>
                        <a href="{{route('tampilpengajuansuratkeluar')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Cancel</button></a>
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

