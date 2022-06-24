<?php 
    include ("setting.php");

    if(isset($_GET['save'])){ //saat variabel simpan terbentuk => saat button simpan di tekan
        //menangkap data dari form mahasiswa
        $id_pembeli = $_GET['id_pembeli'];
        $nama_pembeli = $_GET['nama_pembeli'];
        $alamat_pembeli = $_GET['alamat_pembeli'];
        $gmail = $_GET['gmail'];
        $tgl_pembelian = $_GET['tgl_pembelian'];

        // buat query
        $sql = "INSERT INTO tbl_pembeli VALUE('$id_pembeli', '$nama_pembeli','$alamat_pembeli','$gmail','$tgl_pembelian')";
        $query = mysqli_query($db, $sql); //memasukkan data ke tabel

        if($query){ //True or False
            header('Location: listpembeli.php');
            //echo "berhasil kok";
        }else{
            echo "yah gagal coba ulangi lagi";
        }
      
    }

?>