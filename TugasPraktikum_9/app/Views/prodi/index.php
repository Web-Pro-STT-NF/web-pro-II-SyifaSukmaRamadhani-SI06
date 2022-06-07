<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1>Data Prodi</h1>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary mb-3">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kaprodi</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($prodi as $row) :
                        ?>
                            <tr>
                                <th><?= $no; ?></th>
                                <td><?= $row->kode ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->kaprodi; ?></td>
                                <td>
                                    <a title="Edit" href="" class="btn btn-info">Edit</a>
                                    <a title="Delete" href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php
                            $no++;
                        endforeach;

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>