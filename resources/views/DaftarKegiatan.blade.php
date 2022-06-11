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
            <a class="navbar-brand" href="/HomeMahasiswa"><b>Sistma</b></a>
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
                        <h1>Daftar Kegiatan | <a href="/DetailKegiatan">Detail Kegiatan</a></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/HomeMahasiswa">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Kegiatan</li>
                        </ol>
                    </div>
                </div><!-- /.container-fluid -->
                <hr>
        </section>
        <!-- Main content -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Poin</th>
                        <th>Jabatan</th>
                        <th>Lingkup</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Orientasi Kehidupan Akademika</td>
                        <td>2019-12-03</td>
                        <td>10</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Program Pengelolaan Potensi Diri Mahasiswa (P3DM)</td>
                        <td>2020-02-11</td>
                        <td>10</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Program Pelatihan Kepemimpinan Mahasiswa (P2KMM)</td>
                        <td>2021-01-19</td>
                        <td>10</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Keakraban Mahasiswa Prodi</td>
                        <td>2019-11-05</td>
                        <td>5</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Kuliah Umum Wiki Data</td>
                        <td>2019-09-06</td>
                        <td>2</td>
                        <td>Peserta Seminar/Utusan</td>
                        <td>Intern</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Kuliah Umum Peluang dalam Dunia Digital</td>
                        <td>2019-09-27</td>
                        <td>2</td>
                        <td>Peserta Seminar/Utusan</td>
                        <td>Intern</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Kuliah Umum Pura Goes to Campus</td>
                        <td>2020-02-07</td>
                        <td>2</td>
                        <td>Peserta Seminar/Utusan</td>
                        <td>Intern</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>Kuliah Umum Vexanium Goes to Campus</td>
                        <td>2020-02-28</td>
                        <td>2</td>
                        <td>Peserta Seminar/Utusan</td>
                        <td>Intern</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total Point</td>
                        <td>43</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
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
