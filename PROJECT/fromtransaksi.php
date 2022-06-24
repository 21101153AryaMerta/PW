<?php include ("setting.php"); ?>
<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location:formlogin.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form transaksi</title>
    <link rel="stylesheet" href="pembelian.css">
    <link rel="stylesheet" href="list.css">
</head>
<body>
<nav class="nav bg-dark">
<a class="navbar-brand justify-content-start" href="home.php">
      <img src="img/cahracter-mocahthief-1.png" alt="" width="50" height="44" class="">
      GAME STORE
    </a>
    <a class="nav-link" href="frompembelian.php">form pembelian</a>
    <a class="nav-link" href="fromgame.php">form Game</a>
    <a class="nav-link" href="fromtransaksi.php">form Transaksi</a>
    <a class="nav-link" href="formlogin.php">LOGIN</a>
    <a class="nav-link" href="formreg.php">REGISTER</a>
</nav>

<section class="h-100 h-costum background" style="background-color: #100D69;">
<h1 class="text-center p-3 text-white">TRANSAKSI GAME</h1>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Form Pembeli</h3>
            
            <form class="px-md-2" action="transaksi.php" method="get">

            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">ID Pembeli</label>
                      <input type="text" id="" name="id_pembeli" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Nama Pembeli</label>
                <input type="text" id="" name="nama_pembeli" class="form-control" />
              </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Alamat Pembeli</label>
                <input type="text" id="" name="alamat_pembeli" class="form-control" />
              </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Tanggal Pembelian</label>
                <input type="date" id="" name="tgl_pembelian" class="form-control" />
              </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Email</label>
                <input type="text" id="" name="gmail" class="form-control" />
              </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
              <label class="form-label" for="jenis_pembayaran">Jenis Pembayaran</label>
        <select class="form-control" name="jenis_pembayaran" id="">
            <option>Pilih Jenis Pembayaran</option>
            <option>DANA</option>
            <option>BNI</option>
            <option>Paypal</option>
        </select>
              </div>
                </div>
            </div>

            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Game yang dibeli</h3>

            <div class="row">
            <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
              <label class="form-label" for="nama_game">nama Game</label>
        <select class="form-control" name="nama_game" id="">
            <option>Minecraft</option>
            <option>DOTA</option>
            <option>ELDER SCROLL</option>
            <option>GTA V</option>
        </select>
              </div>
                </div>
            </div>

              <button class="btn btn-primary" type="submit" name="save">Tambah</button>

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="h-100 h-costum background" style="background-color: #100D69;">
  <div class="container h-100 h-costum background" style="background-color: #100D69;">
      <h1 class="text-white">List Data transaksi</h1>
      <form action="">
          <table border = "1" class="table table-striped table-hover">
              <tr class="list">
                  <th>No</th>
                  <th>Nama Game</th>
                  <th>Jenis game Game</th>
                  <th>Harga Game</th>
                  <th>aksi</th>
              </tr>
            </table>
          </form>
          <button class="btn btn-primary" type="submit" name="save">SIMPAN</button>
    </div>
</section>
</body>
</html>