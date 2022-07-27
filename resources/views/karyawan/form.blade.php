@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Tambah Karyawan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Tambah Karyawan</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body table-responsive p-0">
            <form class="form-horizontal" action="/karyawan/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="nik">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="tempat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" name="tanggal">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputPassword3" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                      {{-- <input type="text" class="form-control" id="inputPassword3" name="nama"> --}}
                      <select name="jabatan" class="form-control" id="">
                        <option value="">-Pilih Jabatan-</option>
                        @foreach ($jabatan as $item)
                          <option value="{{$item->id}}">{{$item->jabatan}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                      <select name="pendidikan" class="form-control" id="">
                        <option value="">-Pilih Pendidikan Terakhir-</option>
                        <option value="Doktor (S3)">Doktor (S3)</option>
                        <option value="Magister (S2)">Magister (S2)</option>
                        <option value="Sarjana (S1)">Sarjana (S1)</option>
                        <option value="Sarjana Terapan (D4)">Sarjana Terapan (D4)</option>
                        <option value="Ahli Madya (D3)">Ahli Madya (D3)</option>
                        <option value="Ahli Muda (D2)">Ahli Muda (D2)</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SD">SD</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
                  <a href="/jabatan" class="btn btn-default float-right">Batal</a>
                </div>
                <!-- /.card-footer -->
              </form>        
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection