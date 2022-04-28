<div class="container">
    <h1 class="text-center">Daftar Mahasiswa</h1>
    <table class="table text-center table-bordered table-light table-hover w-100 m-auto mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">IPK</th>
                <th scope="col">Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($list_mhs as $mhs) :
            ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->gender ?></td>
                    <td><?= $mhs->ipk ?></td>
                    <td><?= $mhs->predikat() ?></td>
                </tr>
        </tbody>
    <?php
                $no++;
            endforeach;
    ?>
    </table>
</div>