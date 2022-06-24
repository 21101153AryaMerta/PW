<?php 
    include ("setting.php");

    if(isset($_GET['id_transaksi']) ){

        $id_transaksi = $_GET['id_transaksi'];

        $sql = "DELETE FROM tbl_transaksi WHERE id_transaksi='$id_transaksi'";
        $query = mysqli_query($db, $sql); 

         if($query) {
            header('Location: listtransaksi.php');
            echo "<h1> Delete Data Berhasil </h1>";
        } else {
            // kalau gagal tampilkan pesan
            die("yah gagal");
        }    
    }
    
?>