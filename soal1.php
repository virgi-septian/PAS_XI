<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="soal2.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active btn btn-outline-light bg-danger text-white"" aria-current=" page"
                            href="soal1.php">
                            <h6>Soal 1</h6>
                        </a>
                    </li>
                    &nbsp;
                    <li class="nav-item">
                        <a class="nav-link active btn btn-outline-light bg-danger text-white" href="soal2.php">
                            <h6>Soal 2</h6>
                        </a>
                    </li>
                    &nbsp;
                    <li class="nav-item">
                        <a class="nav-link active btn btn-outline-light bg-danger text-white" href="soal3.php">
                            <h6>Soal 3</h6>
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
                    <button class="btn btn-outline-dark bg-danger" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/miko.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                <b class="text-white">Miko Mall</b>
            </a>
        </div>
    </nav>

    <div>
        <img src="img/put.jpg" height="45" alt="">
        <h1>
            <center><span class="aku">&nbsp; Soal 1 &nbsp; </span></center>
        </h1>
        <img src="img/put.jpg" height="45" alt="">
    </div>


    <div class="container-fluid py-5 bg-light bg-opacity-1 text-black">
        <div class="container">
            <center>
                <h2> Syarat Masuk Ke MIKO MALL</h2>
            </center>
            <br>
            <br>
            <div class="offset-lg-2 col-lg-8">
                <form action="" method="GET">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <h6> <label class="class-lg-8" for="">Nama &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp; : </label>
                                    <input type="text" name="nama" id="nama1" class="form-control-5"
                                        placeholder="Masukkan nama ...">
                                </h6>
                            </div>

                            <div class="col-lg-3">
                                <h6> <label for=""> </label>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="class-lg-8">
                                <h6>
                                    <label class="class-lg-8" for="vaksin">Status Vaksin : </label>
                                    <select name="vaksina" id="">
                                        <option class="form-control" value="status">--- Status Vaksin ---</option>
                                        <option class="form-control" value="sudah"> sudah vaksin</option>
                                        <option class="form-control" value="belum"> belum Vaksin</option>
                                    </select>
                                    </label>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-primary" type="submit" name="simpan">Kirim</button>
                        <button class="btn btn-secondary" type="reset" name="reset">Reset</button>
                    </div>

                    <div class="container">
                        <img src="img/put.jpg" height="45" alt="">
                        <h1>
                            <center></center>
                        </h1>
                        <img src="img/put.jpg" height="45" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['simpan'])){
        $nama = $_GET['nama'];
        $vaksin = $_GET['vaksina'];

        echo "<center> Nama Anda : $nama </center>";
        echo "<center> Status Vaksin : $vaksin </center>";

        if($vaksin == "sudah"){
            echo "<br>";
            echo "<center><b><i> Diizinkan </i></b></center>";
        }else if ($vaksin == "belum"){
            echo "<br>";
            echo "<center><b><i> Tidak Diizinkan </i></b></center>";
            echo "<br>";
            echo "<center> <a href=https:www.pedulilindungi.id><i>Silahkan Daftar Vaksin</i></a></center>";
        }else{
            echo "<br>";
            echo "<center><b><i>Tolong Isi Status Vaksinnya </i></b></center>";
        }
    }

    ?>

</body>

</html>