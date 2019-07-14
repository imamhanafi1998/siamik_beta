<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
        .ilang{
            border-left: none;
            border-right: none;
            border-color: black;
        }
        body {
            font-family: 'Lato';
            background-color: #dfe6e9;
        }
    </style>

    <title>SIAMIK_beta</title>

    <!-- Fonts -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body >

    <nav class="navbar fixed-top navbar-expand-lg navbar-light text-dark p-1 bg-white">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                <img src="/img/logo.jpg" width="130px">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Topscore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success font-weight-bold" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-6" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12 col-lg-3">
			<div class="container">
                <div class="row p-3 border-bottom bg-white rounded-top mt-2">
                    <div class="col">
                        <a href="#">
                            <img src="/img/calendar.png" width="20px" class="mr-2">
                            <span class="text-secondary">Kalender Akademik</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 rounded-bottom bg-white">
                    <div class="col">
                        <a href="#">
                            <img src="/img/file.png" width="20px" class="mr-2">
                            <span class="text-secondary">Tabel Pembayaran</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 border-bottom bg-white rounded-top mt-3">
                    <div class="col">
                        <a href="#">
                            <img src="/img/research.png" width="15px" class="mr-2">
                            <span class="text-secondary">Tracking Ijazah</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 border-bottom bg-white">
                    <div class="col">
                        <a href="#">
                            <img src="/img/class.png" width="15px" class="mr-2">
                            <span class="text-secondary">Kelas MKDU</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 border-bottom bg-white">
                    <div class="col">
                        <a href="#">
                            <img src="/img/catalog.png" width="15px" class="mr-2">
                            <span class="text-secondary">Katalong Online</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 border-bottom bg-white">
                    <div class="col">
                        <a href="#">
                            <img src="/img/notebook.png" width="15px" class="mr-2">
                            <span class="text-secondary">Informasi Skripsi</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 border-bottom bg-white">
                    <div class="col">
                        <a href="#">
                            <img src="/img/mortarboard.png" width="15px" class="mr-2">
                            <span class="text-secondary">Pendaftaran Wisuda</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 border-bottom bg-white">
                    <div class="col">
                        <a href="#">
                            <img src="/img/boss.png" width="15px" class="mr-2">
                            <span class="text-secondary">Daftar Mahasiswa</span>
                        </a>
                    </div>
                </div>
                <div class="row p-3 bg-white rounded-bottom">
                    <div class="col">
                        <a href="#">
                            <img src="/img/network.png" width="15px" class="mr-2">
                            <span class="text-secondary">Daftar Mahasiswa MKDU</span>
                        </a>
                    </div>
                </div>
            </div>
			</div>
            <div class="col-12 col-lg-9 mb-5">
			<div class="d-lg-none">
			<div class="mt-5">
			</div>
			</div>
                <div class="container">
                    <div class="row mt-2">
                        <div class="col">
                            <div class="row p-3 bg-light rounded-top bg-info">
                                <div class="col">
                                    <h4>Perwakilan Wisudawan Periode III TA.2018/2019</h4>
                                </div>
                            </div>
                            <div class="row p-3 bg-light rounded-bottom bg-white">
                                <div class="col">
                                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span>
                                </div>
                            </div>
                            <div class="row p-4 bg-light rounded-bottom bg-white">
                                <div class="col">
                                    <span class="align-center-bottom float-left text-muted"><small>04 Juli 2019</small></span>
                                    <a href="#" class="btn btn-info rounded float-right">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="row p-3 bg-light rounded-top bg-info">
                                <div class="col">
                                    <h4>Daftar Mahasiswa Belum Publish KHS Ganjil 18/19</h4>
                                </div>
                            </div>
                            <div class="row p-3 bg-light rounded-bottom bg-white">
                                <div class="col">
                                    <span>Diumumkan daftar nama-nama mahasiswa yang belum melakukan publish KHS Semeter Ganjil TA.2018/2019, agar segera mempublish paling lambat 24 Mei 2019 Jam 24:00 Wib. </span>
                                </div>
                            </div>
                            <div class="row p-4 bg-light rounded-bottom bg-white">
                                <div class="col">
                                    <span class="align-center-bottom float-left text-muted"><small>23 Mei 2019</small></span>
                                    <a href="#" class="btn btn-info rounded float-right">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-3 bg-white">
        <div class="container">
            <div class="row p-3 mr-auto ml-auto">
                <div class="col-auto container">
                    <div class="row">
                        <div class="col">
                            <span><small> &copy; 2019 Biro Akademik UPN Veteran JATIM. All Right Reserved.</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>