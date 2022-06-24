<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location:formlogin.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
<nav class="nav bg-dark">
        <a class="navbar-brand justify-content-start" href="home.php">
          <img src="img/cahracter-mocahthief-1.png" alt="" width="50" height="44" class="">
          GAME STORE
        </a>
    <a class="nav-link" href="frompembelian.php">form pembelian</a>
    <a class="nav-link" href="fromgame.php">form Game</a>
    <a class="nav-link" href="fromtransaksi.php">form Transaksi</a>
    <a class="nav-link" href="formlogin.php">LOGIN</a>
    <a class="nav-link" href="formreg.php">REGISTER</a>
</nav>
<div class="BG">
    <div class="container text-center">
         <h1 class="jdlt">GAMESTORE</h1>
         <p class="jdl">FIND YOUR GAME</p>
         <a class="btn btn-warning" href="fromtransaksi.php">BUY GAME</a>
         <a class="btn btn-warning" href="logout.php">LOGOUT</a>
     </div>
</div>
<footer class="bg-dark text-white text-center">
    <p>copy@mochathief.2022</p>
</footer>
</body>
</html>