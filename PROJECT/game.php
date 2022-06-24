<?php 
    include ("setting.php");

    if(isset($_GET['save'])){ //saat variabel simpan terbentuk => saat button simpan di tekan
        //menangkap data dari form 
        $id_game = $_GET['id_game'];
        $nama_game = $_GET['nama_game'];
        $jenis_game = $_GET['jenis_game'];
        $harga_game = $_GET['harga_game'];

        // buat query
        $sql = "INSERT INTO tbl_game VALUE('$id_game', '$nama_game','$jenis_game','$harga_game')";
        $query = mysqli_query($db, $sql); //memasukkan data ke tabel

        if($query){ //True or False
            header('Location: listgame.php');
        }else{
            echo "yah gagal coba ulangi lagi";
        }
      
    }


?>