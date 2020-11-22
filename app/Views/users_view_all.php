<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>List User</title>
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
                    <li>
                        <a href="<?= base_url('admin/users/welcome')?>">Home</a>
                    </li>   
                    <li class="active">
                        <a href="<?= base_url('admin/users/index')?>">List User</a>
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
        <div class="container mt-5">
            <a href="<?= base_url('admin/users/create')?>" class="btn btn-success mb-2">Create</a>
            <h2> List User </h2>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <table class="table table-striped" id="tableuser">
                        <thead>
                            <tr>
                                <th>ID</td>
                                <th>Nama</td>
                                <th>Email</td>
                                <th>Nomor Kontak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($users):?>
                            <?php foreach($users as $pengguna):?>
                            <tr>
                                <td><?= $pengguna['id'];?></td>
                                <td><?= $pengguna['name'];?></td>
                                <td><?= $pengguna['email'];?></td>
                                <td><?= $pengguna['contact_no']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/users/edit/'.$pengguna['id']); ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= base_url('admin/users/delete/'.$pengguna['id']); ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
        <script>
            $(document).ready( function () {
                $('#tableuser').DataTable();
            } );
        </script>
    
</body>
</html>