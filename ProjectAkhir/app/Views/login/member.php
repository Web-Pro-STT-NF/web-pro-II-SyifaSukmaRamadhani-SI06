<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5 ">
        <div class="card">
            <div class="card-header bg-success text-white">
                Halaman Member
            </div>
            <div class="card-body">
                <H1>Halo, <?= session()->get('username'); ?></H1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis expedita et voluptatibus optio consequuntur totam?</p>
                <a href="<?= site_url('login/logout') ?>" class="btn btn-primary py-2 text-center">LOGOUT</a>
            </div>
        </div>
    </div>
</body>

</html>