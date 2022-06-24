<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location:formlogin.php");
        exit;
    }
?>

<?php include ("setting.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List pembeli</title>
    <link rel="stylesheet" href="transaksi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<div class="container">
    <h1>List Data pembeli</h1>
    <a class="btn btn-primary input" href="frompembelian.php">input data</a>
    <form action="" method="POST">
        <input type="text" name="kunci">
        <button type="submit" name="cari">cari</button>
    </form>
    <form action="">
            <table border = "1" class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Tgl pembelian</th>
                    <th>aksi</th>
                </tr>
        </div>
            <?php
            if(isset($_POST['cari'])){
                include("setting.php");
                $kunci = $_POST['kunci'];
                $sql = "SELECT * FROM tbl_pembeli WHERE id_pembeli like '%$kunci%' or nama_pembeli like '%$kunci%' or alamat_pembeli like '%$kunci%' or gmail like '%$kunci%' or tgl_pembelian like '%$kunci%' ";
            }else{

                $sql = "SELECT * FROM tbl_pembeli"; //query untuk menampilkan data
            }
            $query = mysqli_query($db, $sql); //untuk menjalankan query		
            while($pembeli = mysqli_fetch_array($query)){ //nilai true or false
                echo "<tr>";			
                    echo "<td>".$pembeli['id_pembeli']."</td>";
                    echo "<td>".$pembeli['nama_pembeli']."</td>";
                    echo "<td>".$pembeli['alamat_pembeli']."</td>";
                    echo "<td>".$pembeli['gmail']."</td>";
                    echo "<td>".$pembeli['tgl_pembelian']."</td>";
                    
                    echo "<td>";
                    echo "<a href='fromedit.php?id_pembeli=".$pembeli['id_pembeli']."'class='btn btn-primary''>Edit</a> | ";
                    echo "<a href='fromhapus.php?id_pembeli=".$pembeli['id_pembeli']."'class='btn btn-warning''>Hapus</a>";
                    echo "</td>";
                echo "</tr>";
            }	
            ?>
        </table>
    </form>
</body>
</html>