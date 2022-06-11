<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pendukung Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="/HomeMahasiswa">Sistem Pendukung Mahasiswa</a>
            <nav>
                <a class="navbar-brand" href="/">Logout</a>
            </nav>
        </nav>
    </div>
    <br>
    <!-- Content Wrapper. Contains page content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><a href="/DaftarKegiatan">Daftar Kegiatan</a> | Detail Kegiatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/HomeMahasiswa">Home</a></li>
                            <li class="breadcrumb-item active">Detail Kegiatan</li>
                        </ol>
                    </div>
                </div><!-- /.container-fluid -->
                <hr>
        </section>
        <!-- Main content -->
        <div class="container-fluid">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD +</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Kegiatan Seminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="col-form-label">Kegiatan </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Tanggal Perolehan</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Prestasi </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">File Bukti Kegiatan</label>
                                    <input type="file" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Kegiatan Umum</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Poin</th>
                            <th>Prestasi</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Kuliah Umum Wiki Data</td>
                            <td>2019-09-06</td>
                            <td>2</td>
                            <td>Peserta Seminar/Utusan</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Kuliah Umum Peluang dalam Dunia Digital</td>
                            <td>2019-09-27</td>
                            <td>2</td>
                            <td>Peserta Seminar/Utusan</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Kuliah Umum Pura Goes to Campus</td>
                            <td>2020-02-07</td>
                            <td>2</td>
                            <td>Peserta Seminar/Utusan</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Kuliah Umum Vexanium Goes to Campus</td>
                            <td>2020-02-28</td>
                            <td>2</td>
                            <td>Peserta Seminar/Utusan</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="container-fluid">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">ADD
                        +</button>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Kegiatan Organisasi</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="col-form-label">Masa Jabatan</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Keterangan Kegiatan dalam Organisasi </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Organisasi </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Tingkat Organisasi</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Jabatan </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">File Bukti Kegiatan</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Kegiatan Organisasi</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Masa Jabatan</th>
                                    <th>Keterangan</th>
                                    <th>Organisasi</th>
                                    <th>Tingkat Organisasi</th>
                                    <th>Jabatan</th>
                                    <th>Poin</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>2020-12-03</td>
                                    <td>Sistem Infromasi Creative Day 2020</td>
                                    <td>Fakultas/Program Studi</td>
                                    <td>Intern</td>
                                    <td>Anggota</td>
                                    <td>2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>2021-06-03</td>
                                    <td>Net Club Kegiatan Webinar "How to Make Money by The Game"(Kepanitiaan)</td>
                                    <td>Fakultas/Program Studi</td>
                                    <td>Intern</td>
                                    <td>Anggota</td>
                                    <td>2</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</body>

</html>
