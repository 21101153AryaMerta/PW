<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <title>Form Register</title>
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

<section class="BG" style="background-color: #100D69;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Form Register</h3>
            
            <form class="px-md-2" action="register.php" method="get">

            <div class="form-outline mb-4">
                  <label class="form-label" for="">username</label>
                <input type="text" id="" name="username" class="form-control" />
              </div>

              <div class="form-outline mb-4">
                  <label class="form-label" for="">Email</label>
                <input type="text" id="" name="email" class="form-control" />
              </div>

              <div class="form-outline mb-4">
                  <label class="form-label" for="">Password</label>
                <input type="text" id="" name="password" class="form-control" />
              </div>
              

              <button class="btn btn-primary" type="submit" name="save">SAVE</button>

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>