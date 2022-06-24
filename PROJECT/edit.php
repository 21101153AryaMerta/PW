<?php include("setting.php"); 
    
    if(!isset($_GET['id_game']) ){
        // kalau tidak ada nim di query string
         echo "gk dapat idnya";
    }
    //ambil id dari query string/link
    $id_game = $_GET['id_game'];
    
    $sql = "SELECT * FROM tbl_game WHERE id_game='$id_game'";
    $query = mysqli_query($db, $sql);
    $game= mysqli_fetch_assoc($query);
    
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
    <link rel="stylesheet" href="gameedit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data Game</title>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Edit Data game</h3>
            
            <form class="px-md-2" action="prosesedit2.php" method="get">

              <div class="form-outline mb-4">
                  <label class="form-label" for="">ID Game</label>
                <input type="text" id="" name="id_game" class="form-control" value="<?php echo $game['id_game'] ?>"/>
              </div>

              <div class="form-outline mb-4">
                  <label class="form-label" for="">Nama Game</label>
                <input type="text" id="" name="nama_game" class="form-control" value="<?php echo $game['nama_game'] ?>"/>
              </div>

              <div class="form-outline mb-4">
                  <label class="form-label" for="jenis_game">Jenis Game</label>
                <select class="form-control" name="jenis_game" id="" value="<?php echo $game['jenis_game'] ?>">
            <option>Pilih Jenis Game</option>
            <option>Action</option>
            <option>Adventure</option>
            <option>Fantasy</option>
            <option>Survival</option>
            <option>Racing</option>
            <option>Horror</option>
        </select>
              </div>

              <div class="form-outline mb-4">
                  <label class="form-label" for="">Harga Game</label>
                <input type="text" id="" name="harga_game" class="form-control" value="<?php echo $game['harga_game'] ?>"/>
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