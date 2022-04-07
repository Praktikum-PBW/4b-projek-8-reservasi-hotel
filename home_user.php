<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="assets/img/logomini.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Dashboard User
        </a>
        <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
        </div>
    </nav>
    <div class="container">
    <div class="jumbotron bg-white text-danger">
        <h1 class="display-4">Hello, <b><?= $_SESSION['nama'] ?></b></h1>
        <p class="lead"> Selamat datang, anda berhasil Login sebagai <b><?= $_SESSION['level'] ?></b> </p>
        
    </div>
    </div>
    
    <!-- Awal Card -->
    <div class="container-fluid py-5 mt-1">
      <div class="container">
        <div class="judul-kategori" style="background-color: #ce0000; border-radius: 10px;">
          <h5 class="text-center" style="font-family:'Work Sans', sans-serif;color: #FFFBE9;">REKOMENDASI</h5>
        </div>
        <div class="row">

          <div class="col-sm-4 col-4">
            <div class="card"">
              <img src="assets/img/hotel/hotel1.jpg " width="350" height="350" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jaja Hotel</h5>
                <p class="card-text">Kualitas Bintang 5 GEGE DAH! </p>
                <a href="#" class="btn text-white" style="background-color: #ce0000;">Book</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-4">
            <div class="card"">
              <img src="assets/img/hotel/hotel2.jpg" width="350" height="350" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IYO Hotel</h5>
                <p class="card-text">Best Hotel In The Universe</p>
                <a href="#" class="btn text-white" style="background-color: #ce0000;">Book</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-4">
            <div class="card"">
              <img src="assets/img/hotel/hotel3.jpg" width="350" height="350" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Uno Hotel</h5>
                <p class="card-text">Kolam Renang Air Zamzam</p>
                <a href="#" class="btn text-white" style="background-color: #ce0000;">Book</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Akhir card -->
</body>

</html>