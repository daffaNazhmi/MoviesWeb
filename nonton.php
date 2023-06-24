<!-- php untuk mengoneksikan database -->
<?php
include "config.php";
$name = $_GET['judul'];
$query = mysqli_query($connect, "select * from recent_movies where nama_movies = '$name'");
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
                    <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>
            </div>
            <!-- Navbar End -->

            <!-- Video Movies Start -->
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4 text-center">Ini Isi Video Dari Film</h1>
                </div>
            </div>
            <!-- Video Movies End -->
          </div>

          <!-- Video Sources Start -->
          <div class="row" style="background-color: black;">
            <div class="col-md-12">
                <h5 class="text-white ml-3 font-weight-bold" style="font-family: roboto;">Video Sources</h5>
                <p class="text-white font-weight-bold"><i class="fa-solid fa-circle-play text-secondary mt-5 ml-3 mr-2"></i>Watch Trailer</p>
                <i class="fa-brands fa-youtube text-secondary float-right mr-3"  style="margin-top: -30px;"></i>
                <p class="text-white font-weight-bold"><i class="fa-solid fa-circle-play text-secondary ml-3 mr-2"></i>HLS</p>
                <i class="fa-brands fa-1x fa-youtube text-secondary float-right mr-3" style="margin-top: -30px;"></i>
            </div>
          </div>
          <hr class="bg-secondary">
          <!-- Video Sources End -->
          
          <!-- Deskripsi Movies Start -->
          <div class="row" style="background-color: black;">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-white ml-3 mt-5 font-weight-bold" style="font-family: roboto;">Description</h5>
                            <!-- ini ntar dari database -->
                            <?php foreach($query as $aliaskan){?>
                            <div class="mt-3" style="width: 19rem;">
                                <img src="ketembur/<?= $aliaskan['file_gambar'] ?>" class="card-img-top" alt="...">
                            </div>
                            <?php } ?>
                    </div>
                    <?php foreach ($query as $query2) { ?>   
                    <div class="col-md-6 mt-5">
                            <!-- ini ntar dari database -->
                        <ul class="list-group list-group-flush text-white">
                            <li class="list-group-item" style="background-color: black;"><small class="text-danger font-weight-bold">Judul </small> : <?=$query2['nama_movies']?></li>
                            <li class="list-group-item" style="background-color: black;"><small class="text-danger font-weight-bold">Genre </small> : <?=$query2['genre_movies']?></li>
                            <li class="list-group-item" style="background-color: black;"><small class="text-danger font-weight-bold">Tanggal Rilis </small> : <?=$query2['tanggal_movies']?></li>
                            <li class="list-group-item" style="background-color: black;"><small class="text-danger font-weight-bold">Durasi </small> : <?=$query2['durasi_movies']?></li>
                            <li class="list-group-item" style="background-color: black;"><small class="text-danger font-weight-bold">Skor </small> : <?=$query2['rating_movies']?></li>
                            <li class="list-group-item" style="background-color: black;"><small class="text-danger font-weight-bold">Votes </small> : <?=$query2['votes_movies']?></li> 
                        </ul>
                        <div class="card-body text-white" style="margin-top: -30px;">
                        <hr class="bg-secondary">
                            <!-- ini ntar dari database -->
                        <h5 class="card-title"><?=$query2['nama_movies']?> (<?=$query2['tahun_movies']?>)</h5>
                        <p class="card-text"><?=$query2['deskripsi_movies']?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
          </div>
          <hr class="bg-secondary">
          <!-- Deskripsi Movies End -->

          <!--About NazhWatch -->
          <div class="row">
            <div class="col-md-12">
              <p class="text-white text-center mt-5 font-weight-bold" style="font-family: roboto;">Pengantar</p>
              <p class="text-secondary text-center" style="margin-top: -10px;">NazhWatch adalah situs penyedia layanan streaming serial tv terbaik, situs NazhWatch menyediakan berbagai serial tv dari layanan populer seperti Netflix, Disney+, HBO, Apple TV+, Amazon Prime Video dan beragam penyedia layanan populer lainnya yang kemudian kami satukan kedalam situs NazhWatch untuk para pecinta serial tv barat, drama korea, anime, dan lainnya dalam kualitas yang jernih, HD, 720p, 1080p dan tentunya dalam subtitle berbahasa Indonesia agar mudah dipahami dan ditonton.
                Bagi teman-teman sekalian yang nyaman dan suka untuk menonton disitus streaming film dan serial tv NazhWatch, jangan lupa untuk membagikan keseruan dan kenyamanan dalam menonton film ke teman-teman anda, keluarga anda, sahabat anda maupun rekan kerja anda, terima kasih dan selamat menikmati serial tv yang anda tonton sekarang :).</p>

              <p class="text-secondary text-center">Bagi teman-teman yang sering menonton film atau series disitus NazhWatch ini ada beberapa tips yang perlu anda ketahui sebelum menonton.</p>

              <p class="text-secondary text-center">Pertama, pastikan koneksi internet anda stabil dan cepat, minimal 10-30Mbps untuk streaming film kualitas 360-720p tanpa patah-patah atau buffering.
                Kedua, pastikan browser anda dalam up-to-date (kami sarankan menggunakan google chrome terbaru), selalu meng-update browser anda untuk pengalaman streaming terbaik disitus NazhWatch.
                Ketiga, ajak teman-teman anda untuk nonton bareng atau nobar disitus kesayangan NazhWatch biar tidak membuang-buang quota anda, sediakan juga camilan seperti pop-corn atau minuman untuk menemani anda.
                Keempat, jika kamu menyukai film ini maka jangan pernah ragu untuk segera membagikannya ke teman-teman anda biar mereka juga bisa menikmati film yang bagus menurut anda serta membantu situs NazhWatch untuk berkembang :).
                NO SPOILER! yang terakhir jangan pernah menyebarkan spoiler film yang sudah anda nonton namun teman anda belum pernah nonton sama sekali.</p>  

              <p class="text-white text-center">Tentang <small class="text-danger">NazhWatch</small></p>

              <p class="text-secondary text-center" style="margin-top: -10px;">NazhWatch merupakan situs nonton film online gratis untuk semua rakyat INDONESIA, situs ini dikhususkan untuk para pecinta film namun tidak memiliki akses ke bioskop ataupun untuk menonton film yang tidak ada tayang dinegara Indonesia, dan perlu diketahui NazhWatch tidak menyimpan segala konten film-film yang ada disitus ini, NazhWatch hanya mengambil film dari berbagai sumber yang berada di internet lewat website/forum ataupun situs penyedia layanan streaming seperti youtube, facebook atau yang lainnya.</p>
            </div>
          </div>
          <hr class="bg-secondary">

          <!-- Comments Start -->
          <!-- <div class="row">
            <div class="col-md-6">
                <h5 class="text-white ml-3 mt-5 font-weight-bold" style="font-family: roboto;">Comments</h5>
            </div>
          </div> -->
          <!-- Comments End -->
          
          <!-- Footer Start -->
          <footer class="mt-5">
              <p class="text-center text-secondary" style="font-size: 15px;">Copyright © 2023 by NazhWatch. All Rights Reserved.</p>
          </footer>
          <!-- Footer End -->
        </div>
            

</body>
</html>


