@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Form Edit Data</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 380px">
            <form action="" class="p-5">
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10" id="input">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="username">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="nama">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="password">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Unit Kerja</label>
                    <div class="col-sm-10">
                    <select name="" id="" class="form-control border border-dark" style="width: 568px">
                        <option value="Resepsionis">Resepsionis</option>
                        <option value="Staf Administrasi Umum">Staf Administrasi Umum</option>
                        <option value="Kepala Tata Usaha">Kepala Tata Usaha</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                    </select>
                    <div class="row mt-4">
                        <button type="submit" class="btn btn-primary mr-3" style="width: 90px">Simpan</button>
                        <a href="{{route('tampilpengguna')}}"><button type="button" class="btn btn-danger" style="width: 90px">Cancel</button></a>
                    </div>
                    </div>
                  </div>
            </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

