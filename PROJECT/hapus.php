<?php 
    include ("setting.php");

    if(isset($_GET['id_game']) ){

        $id_game = $_GET['id_game'];

        $sql = "DELETE FROM tbl_game WHERE id_game='$id_game'"; 
        $query = mysqli_query($db, $sql); 

         if($query) {
            header('Location: listgame.php');
            //echo "<h1> Delete Data Berhasil </h1>";
        } else {
            // kalau gagal tampilkan pesan
            die("yah gagal");
        }    
    }
    
?>