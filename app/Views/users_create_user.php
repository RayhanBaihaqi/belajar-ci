<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <form action="<?= base_url('admin/users/store'); ?>" method="post">
                    <div class="form-group">
                        <lable for="name">Nama</label>
                        <input type="text" name="name" class="from-control" id="name" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <lable for="email">Email</label>
                        <input type="text" name="email" class="from-control" id="email" placeholder="Masukan Email">
                    </div> 
                    <div class="form-group">
                        <button type="submit" id="send_from" class="btn btn-success">Submit</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>