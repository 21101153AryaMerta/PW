<?php 
    include ("setting.php");

    if(isset($_GET['save'])){
        //menangkap data dari form mahasiswa       
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
        //menangkap data dari form DLC
        $id_dlc = $_GET['id_dlc'];
        $nama_dlc = $_GET['nama_dlc'];
        $harga_dlc = $_GET['harga_dlc'];
        
        $total_harga = $harga_game +$harga_dlc;

        
$sql = "UPDATE tbl_transaksi SET id_pembeli='$id_pembeli', nama_pembeli='$nama_pembeli', id_game='$id_game', nama_game='$nama_game', harga_game='$harga_game', id_dlc='$id_dlc', nama_dlc='$nama_dlc', harga_dlc='$harga_dlc', jenis_pembayaran='$jenis_pembayaran', total_harga='$total_harga'  WHERE id_transaksi='$id_transaksi'";        
        $query = mysqli_query($db, $sql);        
        // apakah query update berhasil?
        if($query) {
            header('Location: listtransaksi.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }    

$sql1 = "UPDATE tbl_pembeli SET nama_pembeli='$nama_pembeli', alamat_pembeli='$alamat_pembeli', gmail='$gmail', tgl_pembelian='$tgl_pembelian' WHERE id_pembeli='$id_pembeli'";        
    $query = mysqli_query($db, $sql1);        
    // apakah query update berhasil?
    if($query) {
        header('Location: listtransaksi.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }    

$sql2 = "UPDATE tbl_game SET nama_game='$nama_game', jenis_game='$jenis_game', harga_game='$harga_game' WHERE id_game='$id_game'";        
    $query = mysqli_query($db, $sql2);        
    // apakah query update berhasil?
    if($query) {
        header('Location: listtransaksi.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }    

$sql3 = "UPDATE tbl_dlc SET nama_dlc='$nama_dlc', harga_dlc='$harga_dlc' WHERE id_dlc='$id_dlc'";        
    $query = mysqli_query($db, $sql3);        
    // apakah query update berhasil?
    if($query) {
        header('Location: listtransaksi.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }    

}
?>