<?php
if(isset($_POST['kirim'])){
$nb = $_POST['nb'];
$np = $_POST['np'];
$jk = $_POST['jk'];
$tg = $_POST['tg'];
$jabatan = $_POST['jabatan'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];
$lembur = $_POST['lembur'];
$potongan = $_POST['bpjs'];

if($jabatan == "Direktur"){
    $gaji =10000000;
}
elseif($jabatan== "Manager"){
    $gaji =7500000;
}
elseif($jabatan == "Sekertaris"){
    $gaji =5000000;
}
elseif($jabatan == "Karyawan"){
    $gaji =3000000;
}
elseif($jabatan == "OB"){
    $gaji =1500000;
}


if($pendidikan== "SD"){
    $tunjangan = 200000;
}
elseif($pendidikan == "SMP"){
    $tunjangan = 500000;
}
elseif($pendidikan == "SMA"){
    $tunjangan = 1000000;
}
elseif($pendidikan == "S1"){
    $tunjangan = 1500000;
}
elseif($pendidikan== "S2"){
    $tunjangan = 2000000;
}
else{
    echo "eror";
}


$vs = $lembur * 20000;

if($status == "tetap"){
    $status = 500000;
}
elseif($status == "kontrak"){
    $status = 0;
}
else{
    echo "eror";
}


$potongan = 100000;
$total = ($gaji + $tunjangan + $vs + $status) - $potongan;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                <a class="nav-link active btn btn-outline-light bg-danger text-white"" aria-current="page" href="soal2.php"><h6>Kembali</h6></a>
                </li>
                &nbsp;
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
                <button class="btn btn-outline-dark bg-danger"  type="submit">Cari</button>
            </form>
            </div>
        </div>
    </nav>



    <nav class="navbar navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="img/m2.png" alt="" width="90" height="35" class="d-inline-block align-text-top">
            <b class="text-white">&nbsp; PT.Selalu Makmur Jaya</b>
            </a>
        </div>
    </nav>

    <br>
    <br>
    <center><h1>Struk Gaji Karyawan</h1></center>
    <br>
    <hr>
    <center>
        <table>
            <tr>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>Tanggal</th>
                <th>:</th>
                <th style="text-align: right;"><?php echo $tg; ?> </th>
            </tr>
            <tr>
                <th><b><i>Gaji Pokok</i></b></th>
            </tr>

            <tr>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><?php echo $np; ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $jk;  ?></td>
            </tr>

            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><?php echo $pendidikan; ?></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $jabatan; ?></td>
            </tr>

            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td>Rp. <?php echo number_format($gaji,0,".",".") ?></td>
            </tr>

            <tr>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <th><b><i>Tunjangan</i></b></th>
            </tr>

             <tr>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>Tunjangan Pendidikan</td>
                <td>:</td>
                <td>Rp. <?php echo number_format($tunjangan,0,".",".") ?></td>
            </tr>

            <tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. <?php echo number_format($vs,0,".",".") ?></td>
            </tr>

            <tr>
                <td>Bonus Status Kerja</td>
                <td>:</td>
                <td>Rp. <?php echo number_format($status,0,".",".") ?></td>
            </tr>

            <tr>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <th><b><i>Potongan</i></b></th>
            </tr>

             <tr>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>Potongan BPJS</td>
                <td>:</td>
                <td>Rp. <?php echo number_format($potongan,0,".",".") ?></td>
            </tr>
            <tr>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <th><b><i>Total Gaji</i></b></th>
                <th>:</th>
                <th><b><i>Rp. <?php echo number_format($total,0,".",".") ?></i></b></th>
            </tr>

             <tr>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>Bendahara</th>
                <th>:</th>
                <th style="text-align: right;"><?php echo $nb; ?> </th>
            </tr>

        </table>
    </center>    
</body>
</html>


