@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Form Tambah Data</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 500px">
            <form action="" class="p-5">
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nomor Surat</label>
                    <div class="col-sm-10" id="input">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="nama_lengkap">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control border border-dark" style="width: 568px" name="asal_instansi">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Sifat Surat</label>
                    <div class="col-sm-10">
                        <select name="" id="" class="form-control border border-dark" style="width: 568px">
                            <option value="Staf Administrasi Umum">Segera</option>
                            <option value="Staf Administrasi Umum">Penting</option>
                            <option value="Staf Administrasi Umum">Biasa</option>
                        </select>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Perihal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="jabatan">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control border border-dark" style="width: 568px" name="password">
                      <div class="row mt-4">
                        <button type="submit" class="btn btn-primary mr-3" style="width: 90px">Simpan</button>
                        <a href="{{route('tampilsuratmasuk')}}"><button type="button" class="btn btn-danger" style="width: 90px">Cancel</button></a>
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
