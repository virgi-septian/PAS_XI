<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="soal2.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active btn btn-outline-light bg-danger text-white"" aria-current="page" href="soal1.php"><h6>Soal 1</h6></a>
                </li>
                &nbsp;
                <li class="nav-item">
                <a class="nav-link active btn btn-outline-light bg-danger text-white" href="soal2.php"><h6>Soal 2</h6></a>
                </li>
                &nbsp;
                <li class="nav-item">
                <a class="nav-link active btn btn-outline-light bg-danger text-white" href="soal3.php"><h6>Soal 3</h6></a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
                <button class="btn btn-outline-dark bg-danger"  type="submit">Cari</button>
            </form>
            </div>
        </div>
    </nav> 



    <div>
        <img src="img/put.jpg" height="45" alt="">
        <h1><center>=> - - - - - - - - <span class="aku">&nbsp; Soal 3 &nbsp; </span> - - - - - - - - <=</center></h1>
        <img src="img/put.jpg" height="45" alt="">
    </div>


    <center>
        <h1>Form Pengulangan 
            <div class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>   
        </h1>
    </center>
    <br>
    <br>
    <hr>
    <form action="" method="POST">
        <center>
            <div class="container">
                <div class="alert alert-primary " role="alert">
                1. Deret Bilangan Ganjil
                </div>
                <div class="alert alert-secondary" role="alert">
                2. Segitiga Sama Kaki Terbalik
                </div>
                <div class="alert alert-success" role="alert">
                3. Deret Bilangan Kelipatan 3
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-7 ">
                        <h6> <label for="" >Pilih : </label>
                            <input type="number" name="pilih" id="nama1" class= "form-control-5" placeholder=""> 
                        </h6>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h6> <label for="" >Masukan Angka &nbsp; : </label>
                            <input type="number" name="masuk" id="nama1" class= "form-control-5" placeholder=""> 
                        </h6>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-7">
                        <button class="btn btn-primary" type="submit" name="simpan" >Kirim</button>
                        <button class="btn btn-secondary" type="reset" name="reset">Reset</button>
                    </div>
                </div>
            </div>
        </center>
        </div>
    </form>

    <?php

    if(isset($_POST['simpan'])){
        $p = $_POST['pilih'];
        $m = $_POST['masuk'];

        if($p == "1"){
            echo "<br>";
            echo "<center><b>Deret Bilangan Ganjil</b><br>";
            for($i=1; $i <=$m; $i+=2){
                echo "$i ";
            }
        }
        elseif ($p == "2"){
            echo "<br>" ;
            echo "<center><b>Deret Segitiga Sama Kaki Terbalik</b><br>";
            for($i=$m; $i>=1; $i--){
            echo "<br>";
            for($j=5; $j>=$i; $j--){
                echo " ";
            }
            for($g=1; $g<=$i; $g++){
                echo " * ";
            }

        }
        }
        else if($p == "3"){
            echo "<br>";
            echo "<center><b>Deret Bilangan Ganjil</b><br>";
            for($i=3; $i <=$m; $i+=3){
                echo "$i ";
            }
        }
        else{
            echo "<br>";
            echo "<center><b>Maaf Pilihan Anda Tidak Ada</b><br>";
            echo "<center><b>Silahkan Pilih Kembali</b><br>";
        }


    }

    ?>
</body>
</html>