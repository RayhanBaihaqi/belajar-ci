<!DOCTYPE html>
<html lang="en">
  <head>
      <title>News</title>
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
                <div class="col-sm-11">
                    <input type="hidden" name="id" value="<?= $berita['id']; ?>">
                    <h2><?= $berita['judulberita']; ?></h2>
                    <h5><?= $berita['author']; ?>, <?= $berita['tglposting']; ?></h5>
                    <img src="<?= base_url('images/'.$berita['foto'])?>" class="rounded" style="width:1000px;height:300px;">
                    <br><br><p><?= $berita['isiberita']; ?></p><br>
                </div>
            </div>
        </div>
        <div class="jumbotron text-center" style="margin-bottom:0">
          <p>This Is Footer</p>
        </div>
    </body>
</html>