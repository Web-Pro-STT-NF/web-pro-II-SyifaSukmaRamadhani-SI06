<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kategori Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<div class="container">
    <div class="card mt-3">
        <div class="card-header bg-primary text-light">
            <h1>Daftar Event</h1>
        </div>
        <div class="card-body">
            <form action="<?= base_url('landingpage/save/'); ?>" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group mt-3">
                    <input type="hidden" id="tanggal_daftar" name="tanggal_daftar" class="form-control" value="">
                    <!-- pakai now() -->
                </div>
                <div class="form-group mt-3">
                    <label for="kategori_peserta_id">Kategori Peserta</label>
                    <select name="kategori_peserta_id" class="form-select" aria-label="Default select example">
                        <option selected>Kategori Peserta</option>
                        <?php foreach ($kategori_peserta as $peserta) : ?>
                            <option value="<?= $peserta->id; ?>"><?= $peserta->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="alasan">Alasan</label>
                    <textarea class="form-control" id="alasan" name="alasan" rows="4"></textarea>
                </div>

                <div class="form-group mt-3">
                    <input type="hidden" id="users_id" name="users_id" class="form-control" value="<?= session()->get('id'); ?>">
                    <!-- pakai session -->
                </div>
                <div class="form-group mt-3">
                    <input type="hidden" id="kegiatan_id" name="kegiatan_id" class="form-control" value="<?= session()->get('id_kegiatan'); ?>">
                    <!-- pakai session -->
                </div>
                <div class="form-group mt-3">
                    <input type="hidden" id="nosertifikat" name="nosertifikat" class="form-control" value="">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Daftar</button>
            </form>
        </div>

    </div>
</div>

<body>

</body>

</html>