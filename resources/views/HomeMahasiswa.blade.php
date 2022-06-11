<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pendukung Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
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
    <!-- Page specific script -->
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".chartContainer").CanvasJSChart({
                title: {
                    text: "Perkembangan IP Semester"
                },
                axisY: {
                    title: "IPS",
                    includeZero: false
                },
                axisX: {
                    interval: 1
                },
                data: [{
                    type: "line",
                    toolTipContent: "{label}: {y} IP Semester",
                    dataPoints: [{
                            label: "Gasal 2019/2020",
                            y: 3.23
                        },
                        {
                            label: "Genap 2019/2020",
                            y: 3.29
                        },
                        {
                            label: "Gasal 2020/2021",
                            y: 3.75
                        },
                        {
                            label: "Genap 2020/2021",
                            y: 3.69
                        },
                        {
                            label: "Gasal 2021/2022",
                            y: 3.84
                        }
                    ]
                }]
            });
        });
    </script>
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
                        <h1>Profile</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid"
                                        src="https://ssat.ukdw.ac.id/_photos/informasi/72190315.jpg"
                                        alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">Ferry</h3>
                                <p class="text-muted text-center">72190315</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Jurusan</b> <a class="float-right">Sistem Informasi</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Status</b> <a class="float-right">Mahasiswa Aktif</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Total SKS</b> <a class="float-right">111</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>IPK</b> <a class="float-right">3.58</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Poin Keaktifan</b> <a class="float-right">43</a>
                                    </li>
                                </ul>
                                <a href="/DetailKHS" class="btn btn-primary btn-block"><b>Detail KHS</b></a>
                                <a href="/DaftarKegiatan" class="btn btn-primary btn-block"><b>Daftar Kegiatan</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3>Data</h3>
                            </div>
                            <div class="card-body">
                                <strong><i class="bi bi-book"></i> Pendidikan</strong>
                                <p class="text-muted">
                                    Universitas Kristen Duta Wacana
                                </p>
                                <hr>
                                <strong><i class="bi bi-geo-alt"></i> Lokasi</strong>
                                <p class="text-muted">Kalimantan Barat, Sintang</p>
                                <hr>
                                <strong><i class="bi bi-person-lines-fill"></i> Nomor Kontak</strong>
                                <p class="text-muted">
                                    082159517983
                                </p>
                                <hr>
                                <strong><i class="bi bi-inbox"></i> Email</strong>
                                <p class="text-muted">
                                    ferry@si.ukdw.ac.id
                                </p>
                            </div>

                        </div>
                        <div class="chartContainer" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</body>

</html>
