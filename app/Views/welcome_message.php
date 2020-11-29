<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>RBWEBS</h1>
            <p>Website berita</p> 
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="<?php echo base_url('home'); ?>">RBWEBS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('home'); ?>">Home</a>
                    </li>
                </ul>
            </div>  
        </nav>
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Us</h2>
                    <img src="<?= base_url('images/logo.png') ?>" style="height: 300px;">
                    <p><link rel="stylesheet" href="">Hello, Rayhan Baihawi Pembuat RBWEBS selamat menikmati</p>
                    <h3>Sosial Media</h3>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Instagram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Youtube</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <h1>Berita</h1>
                    <?php if($berita): ?>
                    <?php foreach ($berita as $reading): ?>
                    <h3><?= $reading['judulberita']; ?></h3>
                    <h5><?= $reading['author']; ?>, <?= $reading['tglposting']; ?></h5>
                    <img src="<?= base_url('images/'.$reading['foto']) ?>" class="rounded" style="width:700px;height:300px;">
                    <br><br><p><?= substr($reading['isiberita'],0,500)."....."; ?></p>
                    <a href="<?= base_url('home/beritaopen/'.$reading['id']); ?>" class="btn btn-info">Baca Selengkapnya</a><br><br>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="jumbotron text-center" style="margin-bottom:0">
          <p>This Is Footer</p>
        </div>
    </body>
</html>