@extends('layouts.template')

@section('content')
<section class="content-header">
    <div class="container-fluid mt-4">
      <div class="row mb-2 d-flex justify-content-center">
        <div class="col-sm-10">
            <p class="text-start" id="judulhalaman">Penyerahan Legalisir Ijazah</p>
        </div>
        <div class="col-sm-10" style="background-color: white; width: 1070px; height: 580px">
            <form action="/serahkanlegalisirijazah/{{$ijazah->id}}" class="p-5" method="POST">
              @csrf
              @method('PATCH')
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
                      <a href="{{route('downloadLegalisirIjazah',$ijazah->file)}}">
                        <input value="{{$ijazah->file}}" type="text" class="form-control border border-dark" style="width: 568px" name="file" readonly>
                      </a>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Penyerahan Kepada</label>
                    @if (auth()->user()->unit_kerja=="Resepsionis")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                          <option value="Staf Administrasi Umum">Staf Administrasi Umum</option>
                      </select>
                      </div>
                    @elseif (auth()->user()->unit_kerja=="Staf Administrasi Umum")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                          <option value="Resepsionis">Resepsionis</option>
                          <option value="Kepala Sekolah">Kepala Sekolah</option>
                      </select>
                      </div>
                    @elseif (auth()->user()->unit_kerja=="Kepala Sekolah")
                    <div class="col-sm-10">
                      <select name="penyerahan_kepada" id="" class="form-control border border-dark" style="width: 568px">
                          <option value="Resepsionis">Resepsionis</option>
                      </select>
                      </div>
                    @endif
                    
                </div>
                <div class="row mt-3">
                    <label for="" class="col-sm-2 col-form-label">Catatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control border border-dark" style="width: 568px" name="catatan">
                      <div class="row mt-4">
                        <a href="" data-toggle="modal" data-target="#ModalSerahkanLegalisirIjazah{{$ijazah->id}}">
                          <button type="button" class="btn btn-primary mr-3" style="width: 90px">Serahkan</button>
                        </a>
                        <a href="{{route('tampillegalisirijazah')}}"><button type="button" class="btn btn-secondary" style="width: 90px">Kembali</button></a>
                    </div>
                    </div>
                  </div>
                  </div>
                  @include('modal.serahkanlegalisirijazah')
            </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

