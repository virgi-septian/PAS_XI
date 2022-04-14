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
                <img src="img/m2.png" alt="" width="90" height="35" class="d-inline-block align-text-top">
                <b class="text-white">&nbsp; PT.Selalu Makmur Jaya</b>
            </a>
        </div>
    </nav>

    <div>
        <img src="img/put.jpg" height="45" alt="">
        <h1>
            <center><span class="aku"> &nbsp; Soal 2 &nbsp; </span></center>
        </h1>
        <img src="img/put.jpg" height="45" alt="">
    </div>

    <br>
    <br>
    <center>
        <h3> Penggajian Karyawan</h3>
    </center>
    <br>
    <center>
        <h1>PT.Selalu Makmur Jaya</h1>
    </center>
    <br>
    <br>
    <center>
        <form action="proses2.php" method="POST">
            <br>
            <table>
                <tr>
                    <th>Nama Bendahara</th>
                    <td>:</td>
                    <td><input type="text" name="nb" id=""><br></td>
                </tr>
                <tr>
                    <th>Nama Pekerja</th>
                    <td>:</td>
                    <td><input type="text" name="np" id=""></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki - laki" class="bi bi-gender-male">Laki-Laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Gaji</th>
                    <td>:</td>
                    <td><input type="date" name="tg"></td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>:</td>
                    <td><select name="jabatan">
                            <option value="">-- Pilih Jabatan ---</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>:</td>
                    <td><select name="pendidikan" id="">
                            <option value="ppp">-- Pendidikan Terakhir --</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select></td>
                </tr>
                <tr>
                    <th>Status Pegawai</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="status" value="tetap"><b>Tetap</b>
                        <input type="radio" name="status" value="kontrak"><b>Kontrak</b>
                    </td>
                </tr>
                <tr>
                    <th>Lembur</th>
                    <td>:</td>
                    <td><input type="number" name="lembur">Hari / Rp.20.000</td>
                </tr>
                <tr>
                    <th>Potongan BPJS</th>
                    <td>:</td>
                    <td>
                        <input type="number" name="bpjs" max="100000" placeholder="100000">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-primary" type="submit" name="kirim">Kirim</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>