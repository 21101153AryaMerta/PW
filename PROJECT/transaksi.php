<?php 
    include ("setting.php");

    if(isset($_GET['save'])){ //saat variabel simpan terbentuk => saat button simpan di tekan
        $id_transaksi = $_GET['id_transaksi'];
        $jenis_pembayaran = $_GET['jenis_pembayaran'];
        //menangkap data dari form pembeli
        $id_pembeli = $_GET['id_pembeli'];
        $nama_pembeli = $_GET['nama_pembeli'];
        $alamat_pembeli = $_GET['alamat_pembeli'];
        $gmail = $_GET['gmail'];
        $tgl_pembelian = $_GET['tgl_pembelian'];
        //menangkap data dari form game
        $id_game = $_GET['id_game'];
        $nama_game = $_GET['nama_game'];
        $jenis_game = $_GET['jenis_game'];
        $harga_game = $_GET['harga_game'];
        
        $total_harga = $harga_game;

        // buat query
        $sql = "INSERT INTO tbl_transaksi VALUE('$id_transaksi', '$id_pembeli', '$nama_pembeli', '$id_game', '$nama_game', '$harga_game', '$id_dlc', '$nama_dlc', '$harga_dlc', '$jenis_pembayaran', '$total_harga')";
        $sql1 = "INSERT INTO tbl_pembeli VALUE('$id_pembeli', '$nama_pembeli', '$alamat_pembeli', '$gmail', '$tgl_pembelian')";
        $sql2 = "INSERT INTO tbl_game VALUE('$id_game', '$nama_game', '$jenis_game', '$harga_game')";


        $query = mysqli_query($db, $sql); //memasukkan data ke tabel
        $query = mysqli_query($db, $sql1);
        $query = mysqli_query($db, $sql2);
        $query = mysqli_query($db, $sql3);

        if($query){ //True or False
            header('Location: listtransaksi.php');
            //echo "betul sekali";
        }else{
            echo "yah gagal coba ulangi lagi";
        }
      
    }


?>