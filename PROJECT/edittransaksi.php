<?php include("setting.php"); 
    
    if(!isset($_GET['id_transaksi']) ){
        // kalau tidak ada nim di query string
         echo "gk dapat idnya";
    }
    //ambil id dari query string/link
    $id_transaksi = $_GET['id_transaksi'];
    
    $sql = "SELECT * FROM tbl_transaksi WHERE id_transaksi=$id_transaksi";
    $query = mysqli_query($db, $sql);
    $transaksi= mysqli_fetch_assoc($query);
    
    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){ //cek data di tabel
        die("data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data Transaksi</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>

<nav class="nav bg-dark">
<a class="navbar-brand justify-content-start" href="home.php">
      <img src="img/cahracter-mocahthief-1.png" alt="" width="50" height="44" class="">
      GAME STORE
    </a>
    <a class="nav-link" href="frompembelian.php">form pembelian</a>
    <a class="nav-link" href="fromgame.php">form Game</a>
    <a class="nav-link" href="fromdlc.php">form DLC</a>
    <a class="nav-link" href="fromtransaksi.php">form Transaksi</a>
</nav>

<section class="h-100 h-costum background" style="background-color: #100D69;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Edit Data Transaksi</h3>
            
            <form class="px-md-2" action="prosesedit3.php" method="get">

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">ID transaksi</label>
                      <input type="text" id="" name="id_transaksi" class="form-control" value="<?php echo $transaksi['id_transaksi'] ?>"/>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">ID Pembeli</label>
                      <input type="text" id="" name="id_pembeli" class="form-control" value="<?php echo $transaksi['id_pembeli'] ?>"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Nama Pembeli</label>
                <input type="text" id="" name="nama_pembeli" class="form-control" value="<?php echo $transaksi['nama_pembeli'] ?>"/>
              </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Alamat Pembeli</label>
                <input type="text" id="" name="alamat_pembeli" class="form-control" />
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
                  <label class="form-label" for="">Tanggal Pembelian</label>
                <input type="date" id="" name="tgl_pembelian" class="form-control" />
              </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">ID Game</label>
                <input type="text" id="" name="id_game" class="form-control" value="<?php echo $transaksi['id_game'] ?>"/>
              </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Nama Game</label>
                <input type="text" id="" name="nama_game" class="form-control" value="<?php echo $transaksi['nama_game'] ?>"/>
              </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="jenis_game">Jenis Game</label>
                <select class="form-control" name="jenis_game" id="" value="<?php echo $transaksi['jenis_game'] ?>">
            <option>Pilih Jenis Game</option>
            <option>Action</option>
            <option>Adventure</option>
            <option>Fantasy</option>
            <option>Survival</option>
            <option>Racing</option>
            <option>Horror</option>
        </select>
              </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Harga Game</label>
                <input type="text" id="" name="harga_game" class="form-control" value="<?php echo $transaksi['harga_game'] ?>"/>
              </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">ID DLC</label>
                <input type="text" id="" name="id_dlc" class="form-control" value="<?php echo $transaksi['id_dlc'] ?>"/>
              </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Nama DLC</label>
                <input type="text" id="" name="nama_dlc" class="form-control" value="<?php echo $transaksi['nama_dlc'] ?>"/>
              </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Harga DLC</label>
                <input type="text" id="" name="harga_dlc" class="form-control" value="<?php echo $transaksi['harga_dlc'] ?>"/>
              </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
              <label class="form-label" for="jenis_pembayaran">Jenis Pembayaran</label>
        <select class="form-control" name="jenis_pembayaran" id="" value="<?php echo $transaksi['jenis_pembayaran'] ?>">
            <option>Pilih Jenis Pembayaran</option>
            <option>DANA</option>
            <option>BNI</option>
            <option>Paypal</option>
        </select>
              </div>
                </div>
            </div>  

              <button class="btn btn-primary" type="submit" name="save">SAVE</button>
            <button class="btn btn-danger" type="reset">CLEAR</button>

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>