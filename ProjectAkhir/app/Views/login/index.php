<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post">
                        <?= csrf_field(); ?>

                        <!-- Email input -->
                        <?php if (session()->getFlashdata('error')) {  ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php } ?>

                        <div class="form-outline mb-4">
                            <input type="text" id="username" class="form-control form-control-lg" placeholder="Enter a Username" name="username" autofocus />

                        </div>


                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password" name="password" autofocus />
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="<?= base_url('vw_register'); ?>" class="link-danger">Register</a></p>
                        </div>
                        <!--btn -->
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>