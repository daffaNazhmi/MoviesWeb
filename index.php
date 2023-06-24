<!-- php untuk mengoneksikan database -->
<?php
include "config.php";
$query = mysqli_query($connect, 'select * from recent_movies order by id desc');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Quicksand&display=swap" rel="stylesheet">

<!-- ini kalau yang online (untuk css bootstrap) -->
<link rel="stylesheet" href="/asset/css/bootstrap.css">
<link rel="stylesheet" href="/asset/fontawesome-free-6.2.0-web/css/all.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- css manual tambahan -->
<link rel="stylesheet" href="style.css">

<!-- link font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->


<title>Practice Php Connect Database</title>
</head>
<body style="background-color: black;">
<!------------------------------------------------------------- ------->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
crossorigin="anonymous"></script> -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->

<!-- ----------------------------------------------------------- ------->

<!-- ini yang ofline (javascript)-->
<script src="/asset/js/bootstrap.bundle.min.js"></script>
<script src="/asset/js/jquery.slim.min.js"></script>

      
        <div class="container-fluid">
          <!-- Navbar Start -->
          <div class="row" style="background-color: black;">
            <div class="col-md-4">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-danger font-weight-bold" href="index.php" style="font-family: Oswald;">NazhWatch</a>
              </nav>
            </div>
            <div class="col-md-4">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto" style="font-family: raleway;">
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="#">Genre<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="#">Popular<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="#">Event<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="#">Shows<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="#">Character<span class="sr-only">(current)</span></a>
                    </li>          
                  </div>
                </nav>
            </div>
            <div class="col-md-4">
              <nav class="navbar navbar-expand-lg navbar-light">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search Movies" aria-label="Search">
                    <a href="uploadgambar.php"><button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button></a>
                </form>
              </nav>
            </div>
          </div>
          <!-- Navbar End -->

          <!-- Background Image Start -->
          <div class="row daffa" style="font-family: raleway;">
            <div class="col-md-6 mt-5 ml-3">
                <h6 class="text-white font-italic">New Series/Movies</h6>
                <h3 style="font-size: 25px;" class="text-white">Season 2 | 2023</h3>
                <h2 style="font-size: 50px;" class="text-white font-weight-bold">The</h2>
                <h1 style="font-size: 50px;" class="text-white font-weight-bold">Queen's Gambit</h1>
                <h5 class="text-white mt-5">The Queen's Gambit</h5>
                <small class="text-secondary font-weight-bold">2020 | 1 season | Acara TV Drama</small>
                <p class="text-white mt-3">Di panti asuhan tahun 50-an, seorang gadis muda menunjukkan bakat bermain catur yang hebat dan memulai perjalanan tak terduga menuju ketenaran sambil mengatasi kecanduan.</p>
                <p class="text-dark font-weight-bold">Dibintangi: <small class="text-white" style="font-size: 16px;">Anya Taylor-Joy, Bill Camp, Marielle Heller</small></p>
                <p class="text-dark font-weight-bold" style="margin-top: -20px;">Kreator: <small class="text-white" style="font-size: 16px;">Scott Frank, Allan Scott</small></p>
                <a href=""><button class="btn text-white font-weight-bold border border-white" type="submit" style="margin-top: 20px;">Tonton Sekarang</button></a> 
                <div style="margin-top:190px;"></div>
            </div>
            <div class="row mt-5">
              <div class="col-md-12" style="margin-left: 65px;">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div style="width: 30rem;">
                    <img src="073586500_1612368731-The_Queen_s_Gambit.jpg" class="card-img-top" style="border-radius: 20px;">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Background Image End -->
          
          <!-- More Movies Start -->
          <div class="row" style="background-color: black;">
            <div class="col-md-12 ml-4">
              <h5 class="text-secondary mt-3 font-weight-bold" style="font-family: raleway;">More Movies</h5>
            </div>
          </div>
          <!-- More Movies End -->

          <!-- Content Start -->
          <div class="row" style="background-color: black;">
            <?php
            foreach ($query as $aliasQuery) { ?>
            <div class="col-md-2 mt-3 ml-4">
              <div style="width: 10rem;">
              <!-- ini ntar dari database -->
                <img src="ketembur/<?= $aliasQuery['file_gambar'] ?>" class="card-img-top" style="">
                <div class="card-body" style="font-family: roboto;">
                  <p class="card-text text-white font-weight-bold" style="font-size: 16px;"><?= $aliasQuery['nama_movies']?></p>
                  <p class="card-text text-secondary" style="margin-top: -15px; font-size: 12px;">Tahun : <?= $aliasQuery['tahun_movies']?></p>
                  <a href="nonton.php?judul=<?= $aliasQuery['nama_movies']?>"><button class="btn btn-danger" type="submit" style="font-size: 15px;">Tonton Film</button></a>
                </div>
              </div>
            </div>
            <?php
            }
            ?> 
          </div>
          <!-- Content End -->

          <!-- Footer -->
            <footer class="mt-5">
              <p class="text-center text-secondary" style="font-size: 15px;">Copyright © 2023 by NazhWatch. All Rights Reserved.</p>
            </footer>
          <!-- Footer End -->
        </div>
</body>
</html>


