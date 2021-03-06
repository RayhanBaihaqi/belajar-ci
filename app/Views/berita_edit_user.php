<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collapsible sidebar using Bootstrap 4</title>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="http://belajar-ci.test/css/style.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Rayhan Baihaqi</h3>
                </div>
                <ul class="list-unstyled components">
                    <p>Welcome</p>
                    <li class="active">
                        <a href="<?= base_url('admin/Dashboard')?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/users/index')?>">Master User</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/berita/index')?>">Master Berita</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/halaman/index')?>">Master Halaman</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/login/logout')?>">Logout</a>
                    </li>
                </ul>
                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                    </li>
                    <li>
                        <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                    </li>
                </ul>
            </nav>
    <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2>Edit Berita</h2>
                            <form action="<?= base_url('admin/berita/update'); ?>" method="POST">
                                <input type="hidden" name="id" value="<?= $berita['id'] ?>">
                                <div class="form-grup">
                                    <label for="judulberita">Judul Berita</label>
                                    <input type="text" name="judulberita" class="form-control" id="judulberita" placeholder="Masukkan Judul Berita" value="<?= $berita['judulberita'] ?>">
                                </div>
                                <div class="form-grup">
                                    <label for="author">Author</label>
                                    <input type="text" name="author" class="form-control" id="author" placeholder="Masukkan author" value="<?= $berita['author'] ?>">
                                </div>
                                <div class="form-grup">
                                    <label for="tglposting">Tanggal Posting</label>
                                    <input type="date" name="tglposting" class="form-control" id="tglposting" placeholder="Masukkan Tanggal Posting" value="<?= $berita['tglposting'] ?>">
                                </div>
                                <div class="form-grup">
                                    <label for="foto">Foto</label>
                                    <input type="text" name="foto" class="form-control" id="foto" placeholder="Masukkan Foto" value="<?= $berita['foto'] ?>">
                                </div>
                                <div class="form-grup">
                                    <label for="isiberita">Isi Berita</label>
                                    <textarea name="isiberita" class="form-control" id="isiberita" placeholder="Masukkan Isi Berita"><?= $berita['isiberita'] ?></textarea>
                                </div>
                                <div class="form-grup">
                                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
    </body>
</html>