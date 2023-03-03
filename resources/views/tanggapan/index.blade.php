<!-- Content Header (Page header) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">
                    <center>
                        <font color="pink">Tanggapan</font>
                    </center>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <!-- <li class="breadcrumb-item"><a href="/Pengaduan/index">Home</a></li> -->
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        @if (session('Data dihapus'))
        <div class="alert alert-danger" role="alert">
            {{ session('Data dihapus') }}
        </div>
        @endif

        @if (session('Data diedit'))
        <div class="alert alert-success" role="alert">
            {{ session('Data diedit') }}
        </div>
        @endif

        @if (session('Data ditambah'))
        <div class="alert alert-success" role="alert">
            {{ session('Data ditambah') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="card-header">
                            <div class="col-md-12">
                                <a href="/tanggapan/create" class="btn btn-outline-info"><i class="nav-icon fa fa-thin fa-plus-square"> Tambah Data</i></a>
                                <a href="" target="_blank" class="btn btn-outline-primary"><i class="fas fa-print"> Cetak Data</i></a>
                                <!-- <div class="float-sm-right"> <p>Laporkan Masalah Anda</p> </div> -->
                            </div>
                            <br />
                            <!--/.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table id="table-data" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr class="table-danger">
                                            <th>No</th>
                                            <th>Tanggal Tanggapan</th>
                                            <th>Tanggapan</th>
                                            <th>NIK</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tanggapan as $i => $p)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $p->tgl_tanggapan }}</td>
                                            <td>{{ $p->tanggapan }}</td>
                                            <td>{{ $p->nik }}</td>
                                            <td>
                                                <form method="post" action="{{ route('tanggapan.destroy', $p->id_tanggapan) }}"> {{ csrf_field() }}
                                                    <a href="{{ route('tanggapan.edit', $p->id_tanggapan) }}" class="btn btn-outline-success">Edit</a>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Anda Yakin ingin menghapus data tersebut?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>