<?php 
    include ("setting.php");

    if(isset($_GET['id_pembeli']) ){

        $id_pembeli = $_GET['id_pembeli'];

        $sql = "DELETE FROM tbl_pembeli WHERE id_pembeli='$id_pembeli'"; 
        $query = mysqli_query($db, $sql); 

         if($query) {
            header('Location: listpembeli.php');
            //echo "<h1> Delete Data Berhasil </h1>";
        } else {
            // kalau gagal tampilkan pesan
            die("yah gagal");
        }    
    }
    
?>