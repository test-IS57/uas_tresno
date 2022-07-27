@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Edit Karyawan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Edit Karyawan</li>
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
            <form class="form-horizontal" action="/karyawan/{{$karyawan->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="{{$karyawan->nik}}" name="nik">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="{{$karyawan->nama}}" name="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="{{$karyawan->tempat_lahir}}" name="tempat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" value="{{$karyawan->tanggal_lahir}}" name="tanggal">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputPassword3" value="{{$karyawan->email}}" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                      {{-- <input type="text" class="form-control" id="inputPassword3" name="nama"> --}}
                      <select name="jabatan" class="form-control" id="">
                        <option value="">-Pilih Jabatan-</option>
                        @foreach ($jabatan as $item)
                          <option value="{{$item->id}}" {{$karyawan->jabatans_id==$item->id ? 'selected' : ''}}>{{$item->jabatan}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="{{$karyawan->alamat}}" name="alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                      <select name="pendidikan" class="form-control" id="">
                        <option value="">-Pilih Pendidikan Terakhir-</option>
                        <option value="Doktor (S3)" {{$karyawan->pendidikan_terakhir=='Doktor (S3)' ? 'selected' : ''}}>Doktor (S3)</option>
                        <option value="Magister (S2)" {{$karyawan->pendidikan_terakhir=='Magister (S2)' ? 'selected' : ''}}>Magister (S2)</option>
                        <option value="Sarjana (S1)" {{$karyawan->pendidikan_terakhir=='Sarjana (S1)' ? 'selected' : ''}}>Sarjana (S1)</option>
                        <option value="Sarjana Terapan (D4)" {{$karyawan->pendidikan_terakhir=='Sarjana Terapan (D4)' ? 'selected' : ''}}>Sarjana Terapan (D4)</option>
                        <option value="Ahli Madya (D3)" {{$karyawan->pendidikan_terakhir=='Ahli Madya (D3)' ? 'selected' : ''}}>Ahli Madya (D3)</option>
                        <option value="Ahli Muda (D2)" {{$karyawan->pendidikan_terakhir=='Ahli Muda (D2)' ? 'selected' : ''}}>Ahli Muda (D2)</option>
                        <option value="SMA" {{$karyawan->pendidikan_terakhir=='SMA' ? 'selected' : ''}}>SMA</option>
                        <option value="SMP" {{$karyawan->pendidikan_terakhir=='SMP' ? 'selected' : ''}}>SMP</option>
                        <option value="SD" {{$karyawan->pendidikan_terakhir=='SD' ? 'selected' : ''}}>SD</option>
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