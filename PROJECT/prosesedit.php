<?php 
    include ("setting.php");

    if(isset($_GET['save'])){
        //menangkap data dari form mahasiswa       
        $id_pembeli = $_GET['id_pembeli'];
        $nama_pembeli = $_GET['nama_pembeli'];
        $alamat_pembeli = $_GET['alamat_pembeli'];
        $gmail = $_GET['gmail'];
        $tgl_pembelian = $_GET['tgl_pembelian'];

$sql = "UPDATE tbl_pembeli SET nama_pembeli='$nama_pembeli', alamat_pembeli='$alamat_pembeli',gmail='$gmail', tgl_pembelian='$tgl_pembelian'  WHERE id_pembeli='$id_pembeli'";        
        $query = mysqli_query($db, $sql);        
        // apakah query update berhasil?
        if($query) {
            header('Location: listpembeli.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }    

$sql1 = "UPDATE tbl_transaksi SET nama_pembeli='$nama_pembeli' WHERE id_pembeli='$id_pembeli'";        
    $query = mysqli_query($db, $sql1);        
    // apakah query update berhasil?
    if($query) {
        header('Location: listpembeli.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    } 
}   
?>