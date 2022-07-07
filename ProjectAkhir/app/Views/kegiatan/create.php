<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>/admin/index3.html" class="brand-link">
        <img src="<?= base_url(); ?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Event Organizer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('username'); ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            ORGANIZER
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('daftar'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('kegiatan'); ?>" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('kategori_peserta'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori Peserta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('jenis_kegiatan'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Kegiatan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kegiatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Fixed Layout</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Kegiatan</h3>
                        </div>
                        <div class="card-body">
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
                                <div class="">
                                    <div class="">
                                        <form action="kegiatan/save" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="form-group mt-3">
                                                <label for="judul">Judul</label>
                                                <input type="text" id="judul" name="judul" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="kapasitas">Kapasitas</label>
                                                <input type="text" id="kapasitas" name="kapasitas" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="harga_tiket">Harga Tiket</label>
                                                <input type="text" id="harga_tiket" name="harga_tiket" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="tanggal">Tanggal</label>
                                                <input type="date" id="tanggal" name="tanggal" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="narasumber">Narasumber</label>
                                                <input type="text" id="narasumber" name="narasumber" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="tempat">Tempat</label>
                                                <input type="text" id="tempat" name="tempat" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="pic">Pic</label>
                                                <input type="text" id="pic" name="pic" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="foto_flyer">Tempat</label>
                                                <input type="file" id="foto_flyer" name="foto_flyer" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="jenis_id">Jenis_id</label>
                                                <input type="text" id="jenis_id" name="jenis_id" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <body>

                            </body>

                            </html>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>