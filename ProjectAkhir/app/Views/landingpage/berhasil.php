<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail</title>
</head>

<body>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card m-auto mt-5" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img style="" src="<?= base_url('gambar/' . $kegiatan->foto_flyer); ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><b>Judul : </b><?= $kegiatan->judul; ?></p>
                    <p class="card-text"><b>Kapasitas : </b><?= $kegiatan->kapasitas; ?></p>
                    <p class="card-text"><b>Harga Tiket : </b><?= $kegiatan->harga_tiket; ?></p>
                    <p class="card-text"><b>Tanggal : </b><?= $kegiatan->tanggal; ?></p>
                    <p class="card-text"><b>Narasumber : </b><?= $kegiatan->narasumber; ?></p>
                    <p class="card-text"><b>Tempat : </b><?= $kegiatan->tempat; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>