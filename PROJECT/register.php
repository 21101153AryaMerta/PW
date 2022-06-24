<?php 
    include ("setting.php");

    if(isset($_GET['save'])){ //saat variabel simpan terbentuk => saat button simpan di tekan
        //menangkap data dari form mahasiswa
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        // buat query
        $sql = "INSERT INTO tbl_data_akun VALUE('$username', '$email','$password')";
        $query = mysqli_query($db, $sql); //memasukkan data ke tabel

        if($query){ //True or False
            header('Location: home.php');
            //echo "berhasil kok";
        }else{
            echo "yah gagal coba ulangi lagi";
        }
      
    }

?>