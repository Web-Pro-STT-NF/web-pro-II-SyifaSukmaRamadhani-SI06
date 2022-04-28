<body>
    <div class="container">
        <h1 class="text-center">Daftar Matakuliah</h1>
        <table class="table text-center table-bordered table-light table-hover w-100 m-auto mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Sks</th>
                    <th scope="col">Kode</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($list_mk as $mk) :
                ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $mk->nama ?></td>
                        <td><?= $mk->sks ?></td>
                        <td><?= $mk->kode ?></td>
                    </tr>
            </tbody>
        <?php
                    $no++;
                endforeach;
        ?>
        </table>
    </div>