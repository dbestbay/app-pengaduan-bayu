<!-- Content Header (Page header) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="card-header">
                            <!--/.card-header -->
                            <div class="card-body table-responsive p-0">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="margin-top: 10px;">
                                                <div class="card-header">
                                                    <div class="float-sm-left">
                                                        <p>Tambah Data</p>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <form class="form-horizontal" action="/pengaduan/store" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group row">
                                                            <label class="control-label col-sm-2">Tanggal Pengaduan</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" name="tgl_pengaduan">
                                                                @if ($errors->has('tgl_pengaduan'))
                                                                <div class="date-danger">
                                                                    {{ $errors->first('tgl_pengaduan') }}
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label class="control-label col-sm-2">NIK</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="nik">
                                                                @if ($errors->has('nik'))
                                                                <div class="time-danger">
                                                                    {{ $errors->first('nik') }}
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label class="control-label col-sm-2">Isi Laporan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="isi_laporan">
                                                                @if ($errors->has('isi_laporan'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('isi_laporan') }}
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label for="formFileMultiple" class="control-label col-sm-2">Foto</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="file" id="formFileMultiple" multiple name="foto">
                                                                @if ($errors->has('foto'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('foto') }}
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <!-- <div class="form-group row">
                                                            <label class="control-label col-sm-2">Status</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="status">
                                                                @if ($errors->has('status'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('status') }}
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Default radio
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Default checked radio
                                                            </label>
                                                        </div> -->
                                                        <div class="form-group row">
                                                                <label class="control-label col-sm-2">Status</label>
                                                                <div class="col-sm-6">
                                                                    <label for="status">
                                                                        <input type="radio" name="status"
                                                                            value="proses" id="status"
                                                                            checked>&nbsp Proses &nbsp &nbsp &nbsp
                                                                        <input type="radio" name="status"
                                                                            value="Selesai" id="status">&nbsp
                                                                        Selesai
                                                                    </label>
                                                                    @if ($errors->has('status'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('status') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        <br>
                                                        <br>
                                                        <div class="form-group row">
                                                            <div class="col-sm-offset-5 col-sm-6">
                                                                <a href="/pengaduan/index" class="btn btn-outline-danger">Kembali</a>
                                                                <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin anda ingin menyimpan data tersebut?')">Simpan</i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>