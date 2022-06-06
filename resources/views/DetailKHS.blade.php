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
                        <h1>Detail KHS (Hasil Studi)</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/HomeMahasiswa">Home</a></li>
                            <li class="breadcrumb-item active">Detail KHS</li>
                        </ol>
                    </div>
                </div><!-- /.container-fluid -->
                <hr>
        </section>
        <!-- Main content -->
        <div>
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab">Semua
                                Data KHS</a></li>
                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false">
                                Pilih Semester
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#Gasal2019">Gasal 2019/2020</a>
                                <a class="dropdown-item" href="#Genap2019">Genap 2019/2020</a>
                                <a class="dropdown-item" href="#Gasal2020">Gasal 2020/2021</a>
                                <a class="dropdown-item" href="#Genap2020">Genap 2020/2021</a>
                                <a class="dropdown-item" href="#Gasal2021">Gasal 2021/2022</a>
                            </div>
                        </div>
                    </ul>
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Gasal 2021/2022</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Kode</th>
                                        <th>Matakuliah</th>
                                        <th>Grup</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Kualitas</th>
                                        <th>Dosen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>SI3423</td>
                                        <td>PEMROGRAMAN TERINTEGRASI TERAPAN</td>
                                        <td>A</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12.0</td>
                                        <td>Yetli Oslan, S.Kom, M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>SL3323</td>
                                        <td>PEMROGRAMAN FRONTEND</td>
                                        <td>A</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12.0</td>
                                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>SL3313</td>
                                        <td>PEMROGRAMAN MOBILE</td>
                                        <td>A</td>
                                        <td>3</td>
                                        <td>A-</td>
                                        <td>11.1</td>
                                        <td>Argo Wibowo, S.T., M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>SI3323</td>
                                        <td>MANAJEMEN PROYEK</td>
                                        <td>A</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12.0</td>
                                        <td>Yetli Oslan, S.Kom, M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>SE3343</td>
                                        <td>KEAMANAN TEKNOLOGI INFORMASI</td>
                                        <td>A</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12.0</td>
                                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>SI2413</td>
                                        <td>REKAYASA PERANGKAT LUNAK</td>
                                        <td>B</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12.0</td>
                                        <td>Argo Wibowo, S.T., M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>SE4323</td>
                                        <td>DATA MINING</td>
                                        <td>A-</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>11.1</td>
                                        <td>Yetli Oslan, S.Kom, M.T.<br>
                                            Generosa Lukhayu Pritalia, S.T., M.Eng.</td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>SI2373</td>
                                        <td>KOMUNIKASI ANTAR PERSONAL</td>
                                        <td>A</td>
                                        <td>3</td>
                                        <td>B+</td>
                                        <td>9.9</td>
                                        <td>Wimmie Handiwidjojo, Drs., MIT.</td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>PR2413</td>
                                        <td>PRAKTIKUM REKAYASA PERANGKAT LUNAK</td>
                                        <td>B</td>
                                        <td>0</td>
                                        <td>T</td>
                                        <td>0.0</td>
                                        <td>Andhika Galuh Prabawati, S.Kom., M.Kom.</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>24</td>
                                        <td></td>
                                        <td>92.1</td>
                                        <td>IP Semester 3.84</td>
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
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    <hr>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Genap 2020/2021</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Kode</th>
                        <th>Matakuliah</th>
                        <th>Grup</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                        <th>Kualitas</th>
                        <th>Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>SI3423</td>
                        <td>PEMROGRAMAN TERINTEGRASI TERAPAN</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Yetli Oslan, S.Kom, M.T.</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>SL3323</td>
                        <td>PEMROGRAMAN FRONTEND</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>SL3313</td>
                        <td>PEMROGRAMAN MOBILE</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A-</td>
                        <td>11.1</td>
                        <td>Argo Wibowo, S.T., M.T.</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>SI3323</td>
                        <td>MANAJEMEN PROYEK</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Yetli Oslan, S.Kom, M.T.</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>SE3343</td>
                        <td>KEAMANAN TEKNOLOGI INFORMASI</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>SI2413</td>
                        <td>REKAYASA PERANGKAT LUNAK</td>
                        <td>B</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Argo Wibowo, S.T., M.T.</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>SE4323</td>
                        <td>DATA MINING</td>
                        <td>A-</td>
                        <td>3</td>
                        <td>A</td>
                        <td>11.1</td>
                        <td>Yetli Oslan, S.Kom, M.T.<br>
                            Generosa Lukhayu Pritalia, S.T., M.Eng.</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>SI2373</td>
                        <td>KOMUNIKASI ANTAR PERSONAL</td>
                        <td>A</td>
                        <td>3</td>
                        <td>B+</td>
                        <td>9.9</td>
                        <td>Wimmie Handiwidjojo, Drs., MIT.</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>PR2413</td>
                        <td>PRAKTIKUM REKAYASA PERANGKAT LUNAK</td>
                        <td>B</td>
                        <td>0</td>
                        <td>T</td>
                        <td>0.0</td>
                        <td>Andhika Galuh Prabawati, S.Kom., M.Kom.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>24</td>
                        <td></td>
                        <td>92.1</td>
                        <td>IP Semester 3.84</td>
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
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    <hr>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Genap 2020/2021</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Kode</th>
                        <th>Matakuliah</th>
                        <th>Grup</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                        <th>Kualitas</th>
                        <th>Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>SI3423</td>
                        <td>PEMROGRAMAN TERINTEGRASI TERAPAN</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Yetli Oslan, S.Kom, M.T.</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>SL3323</td>
                        <td>PEMROGRAMAN FRONTEND</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>SL3313</td>
                        <td>PEMROGRAMAN MOBILE</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A-</td>
                        <td>11.1</td>
                        <td>Argo Wibowo, S.T., M.T.</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>SI3323</td>
                        <td>MANAJEMEN PROYEK</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Yetli Oslan, S.Kom, M.T.</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>SE3343</td>
                        <td>KEAMANAN TEKNOLOGI INFORMASI</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>SI2413</td>
                        <td>REKAYASA PERANGKAT LUNAK</td>
                        <td>B</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Argo Wibowo, S.T., M.T.</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>SE4323</td>
                        <td>DATA MINING</td>
                        <td>A-</td>
                        <td>3</td>
                        <td>A</td>
                        <td>11.1</td>
                        <td>Yetli Oslan, S.Kom, M.T.<br>
                            Generosa Lukhayu Pritalia, S.T., M.Eng.</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>SI2373</td>
                        <td>KOMUNIKASI ANTAR PERSONAL</td>
                        <td>A</td>
                        <td>3</td>
                        <td>B+</td>
                        <td>9.9</td>
                        <td>Wimmie Handiwidjojo, Drs., MIT.</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>PR2413</td>
                        <td>PRAKTIKUM REKAYASA PERANGKAT LUNAK</td>
                        <td>B</td>
                        <td>0</td>
                        <td>T</td>
                        <td>0.0</td>
                        <td>Andhika Galuh Prabawati, S.Kom., M.Kom.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>24</td>
                        <td></td>
                        <td>92.1</td>
                        <td>IP Semester 3.84</td>
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
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    <hr>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Genap 2020/2021</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Kode</th>
                        <th>Matakuliah</th>
                        <th>Grup</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                        <th>Kualitas</th>
                        <th>Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>SI3423</td>
                        <td>PEMROGRAMAN TERINTEGRASI TERAPAN</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Yetli Oslan, S.Kom, M.T.</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>SL3323</td>
                        <td>PEMROGRAMAN FRONTEND</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>SL3313</td>
                        <td>PEMROGRAMAN MOBILE</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A-</td>
                        <td>11.1</td>
                        <td>Argo Wibowo, S.T., M.T.</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>SI3323</td>
                        <td>MANAJEMEN PROYEK</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Yetli Oslan, S.Kom, M.T.</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>SE3343</td>
                        <td>KEAMANAN TEKNOLOGI INFORMASI</td>
                        <td>A</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Erick Kurniawan, S.Kom.,M.Kom.</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>SI2413</td>
                        <td>REKAYASA PERANGKAT LUNAK</td>
                        <td>B</td>
                        <td>3</td>
                        <td>A</td>
                        <td>12.0</td>
                        <td>Argo Wibowo, S.T., M.T.</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>SE4323</td>
                        <td>DATA MINING</td>
                        <td>A-</td>
                        <td>3</td>
                        <td>A</td>
                        <td>11.1</td>
                        <td>Yetli Oslan, S.Kom, M.T.<br>
                            Generosa Lukhayu Pritalia, S.T., M.Eng.</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>SI2373</td>
                        <td>KOMUNIKASI ANTAR PERSONAL</td>
                        <td>A</td>
                        <td>3</td>
                        <td>B+</td>
                        <td>9.9</td>
                        <td>Wimmie Handiwidjojo, Drs., MIT.</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>PR2413</td>
                        <td>PRAKTIKUM REKAYASA PERANGKAT LUNAK</td>
                        <td>B</td>
                        <td>0</td>
                        <td>T</td>
                        <td>0.0</td>
                        <td>Andhika Galuh Prabawati, S.Kom., M.Kom.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>24</td>
                        <td></td>
                        <td>92.1</td>
                        <td>IP Semester 3.84</td>
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
