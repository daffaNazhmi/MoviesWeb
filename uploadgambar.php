<?php
include 'config.php';
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

    <form action="" method="POST" enctype="multipart/form-data">
        <table class="table table-bordered text-white">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Gambar</th>
                <th scope="col"></th>
                <th scope="col">File</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>File</td>
                    <td>:</td>
                    <td><input type="file" name="nama_file"></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><input type="submit" name="kirim" value="Kirim"></td>
                </tr>
            </tbody>
        </table>
    </form>

    <?php
    if(isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $namaFile = $_FILES['nama_file']['name'];
        $source = $_FILES['nama_file']['tmp_name'];
        $folder = "gambar/".$namaFile;
        move_uploaded_file($source, $folder);
        $querygambar = mysqli_query($connect, "update recent_movies set nama_gambar = '$nama', file_gambar = '$namaFile' where id = 17");
        if($querygambar){
            echo 'sukses';
        }else{
            echo 'coba lagi';
        }
    }
    ?>
      
        
            

</body>
</html>