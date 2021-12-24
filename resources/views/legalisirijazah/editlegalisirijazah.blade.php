@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Form Edit Legalisir Ijazah</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 500px">
            <form action="/editlegalisirijazah/{{$ijazah->id}}" class="p-5" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              @if ((auth()->user()->unit_kerja=="Staf Administrasi Umum") || (auth()->user()->unit_kerja=="Kepala Sekolah"))
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10" id="input">
                  <input value="{{$ijazah->nama_lengkap}}" type="text" class="form-control border border-dark" style="width: 568px" name="nama_lengkap" readonly>
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">TTL</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->ttl}}" type="date" class="form-control border border-dark" style="width: 568px" name="ttl" readonly>
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->nis}}" type="text" class="form-control border border-dark" style="width: 568px" name="nis" readonly>
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">Tahun Alumni</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->tahun_alumni}}" type="text" class="form-control border border-dark" style="width: 568px" name="tahun_alumni" readonly>
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->tanggal_kunjungan}}" type="date" class="form-control border border-dark" style="width: 568px" name="tanggal_kunjungan" readonly>
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->file}}" type="file" class="form-control border border-dark" style="width: 568px" name="file">
                  <div class="row mt-4">
                    <button type="submit" class="btn btn-primary mr-3" style="width: 90px">Simpan</button>
                    <a href="{{route('tampillegalisirijazah')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
                </div>
                </div>
                
                </div>
              </div>
            </form>
              @else
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10" id="input">
                  <input value="{{$ijazah->nama_lengkap}}" type="text" class="form-control border border-dark" style="width: 568px" name="nama_lengkap">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">TTL</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->ttl}}" type="date" class="form-control border border-dark" style="width: 568px" name="ttl">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->nis}}" type="text" class="form-control border border-dark" style="width: 568px" name="nis">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">Tahun Alumni</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->tahun_alumni}}" type="text" class="form-control border border-dark" style="width: 568px" name="tahun_alumni">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->tanggal_kunjungan}}" type="date" class="form-control border border-dark" style="width: 568px" name="tanggal_kunjungan">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                  <input value="{{$ijazah->file}}" type="file" class="form-control border border-dark" style="width: 568px" name="file">
                  <div class="row mt-4">
                    <button type="submit" class="btn btn-primary mr-3" style="width: 90px">Simpan</button>
                    <a href="{{route('tampillegalisirijazah')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
                </div>
                </div>
                
                </div>
              </div>
            </form>
              @endif
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

