<?php 
    include ("setting.php");

    if(isset($_GET['save'])){
        //menangkap data dari form mahasiswa       
        $id_game = $_GET['id_game'];
        $nama_game = $_GET['nama_game'];
        $jenis_game = $_GET['jenis_game'];
        $harga_game = $_GET['harga_game'];


$sql = "UPDATE tbl_game SET nama_game='$nama_game', jenis_game='$jenis_game',harga_game='$harga_game'  WHERE id_game='$id_game'";        
        $query = mysqli_query($db, $sql);        
        // apakah query update berhasil?
        if($query) {
            header('Location: listgame.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }    

$sql2 = "UPDATE tbl_transaksi SET nama_game='$nama_game',  harga_game='$harga_game' WHERE id_game='$id_game'";        
    $query = mysqli_query($db, $sql2);        
    // apakah query update berhasil?
    if($query) {
        header('Location: listgame.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }    

}
?>