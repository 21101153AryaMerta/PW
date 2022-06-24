<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "gamestore";

    //melakukan koneksi
    $db = mysqli_connect($server, $user, $pass, $database);

    if($db){ //terjadi koneksi atau tidak => True/False
        //echo "koneksi berhasil";
    }else{
        echo "koneksi gagal silahkan ulangi";
    }
    
?>