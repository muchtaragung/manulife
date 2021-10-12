<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/app.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/pages/auth.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/dist/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/dist/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/dist/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/dist/favicon/site.webmanifest">
</head>

<body>
    <div id="auth">

        <div class="row">
            <div class=" col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a> -->
                        <h1 class="text-primary">Employee Analysis</h1>
                    </div>
                    <!-- <h1 class="auth-title">Log in.</h1> -->
                    <p class="auth-subtitle mb-5">Silahkan Login Untuk Melanjutkan</p>
                    <?php if ($this->session->flashdata('auth')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('auth') ?>
                        </div>
                    <?php endif ?>
                    <?php if ($this->session->flashdata('msg')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('msg') ?>
                        </div>
                    <?php endif ?>
                    <form method="post" action="<?= site_url('auth') ?>">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Belum Punya Akun? <a href="<?= site_url('registration') ?>" class="font-bold">Daftar</a>.</p>
                        <!-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>