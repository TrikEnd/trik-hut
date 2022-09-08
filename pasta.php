<?php

    $data = file_get_contents('data/pizza.json');
    $pasta = json_decode($data, true);

    $pasta = $pasta["pasta"];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Trik Hut</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">

        <a class="navbar-brand" href="latihan1.php">
            <img src="img/logo.png" width="120px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="latihan1.php">Home</a>
            <a class="nav-link active" aria-current="page" href="allmenu.php">All Menu</a>
            <a class="nav-link active" aria-current="page" href="pizza.php">Pizza</a>
            <a class="nav-link active" aria-current="page" href="pasta.php">Pasta</a>
            <a class="nav-link active" aria-current="page" href="nasi.php">Nasi</a>
            <a class="nav-link active" aria-current="page" href="minuman.php">Minuman</a>
        </div>
        </div>
    </div>
    </div>
    </nav>




    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>


        <div class="row">
        <?php foreach ($pasta as $pas) : ?>
        <div class="row-md-4">
            
        <div class="card ml-5 mb-3" style="width: 18rem;">
            <img src="img/menu/<?= $pas["gambar"]; ?>" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title"><?= $pas["nama"]; ?></h5>
                <p class="card-text"><?= $pas["deskripsi"]; ?>.</p>
                <h5>RP. <?= $pas["harga"]; ?></h5>
                <a href="#" class="btn btn-primary">Pesan Sekarang</a>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>



    </div>

    














    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>