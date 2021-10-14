<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/app.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row">
            <div class="col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a> -->
                        <h1 class="text-primary">Registrasi</h1>
                    </div>
                    <!-- <h1 class="auth-title">Log in.</h1> -->
                    <p class="auth-subtitle mb-5">Silahkan Registrasi Akun Baru</p>
                    <?php echo form_open('register'); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Nama" name="nama">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <?php if (form_error('nama')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= form_error('nama') ?>
                        </div>
                    <?php endif ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" placeholder="Email" name="email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <?php if (form_error('email')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= form_error('email') ?>
                        </div>
                    <?php endif ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <?php if (form_error('password')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= form_error('password') ?>
                        </div>
                    <?php endif ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Konfirmasi Password" name="password_confirm">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <?php if (form_error('password_confirm')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= form_error('password_confirm') ?>
                        </div>
                    <?php endif ?>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Registrasi</button>
                    <?php echo form_close(); ?>

                    <div class="text-center mt-5 text-lg fs-4">
                        <!-- <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> -->
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
