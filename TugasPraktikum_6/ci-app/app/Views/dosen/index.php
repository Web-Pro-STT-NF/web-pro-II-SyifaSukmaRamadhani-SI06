<div class="container">
    <h1 class="text-center">Daftar Dosen</h1>
    <table class="table text-center table-bordered table-light table-hover w-100 m-auto mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">NIDN</th>
                <th scope="col">Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($list_dsn as $dsn) :
            ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $dsn->nama ?></td>
                    <td><?= $dsn->gender ?></td>
                    <td><?= $dsn->tmp_lahir ?></td>
                    <td><?= $dsn->tgl_lahir ?></td>
                    <td><?= $dsn->nidn ?></td>
                    <td><?= $dsn->pendidikan ?></td>
                </tr>
        </tbody>
    <?php
                $no++;
            endforeach;
    ?>
    </table>
</div>