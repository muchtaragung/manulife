<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header.php') ?>
</head>

<body class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('<?= base_url() ?>assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form" method="post" action="<?= site_url('auth') ?>" style='min-height: 320px;'>
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Login Sebelum Melanjutkan</h4>
                            </div>
                            <div class="card-body">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email..." name="email" </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password..." name="password">
                                    </div>
                                </div>
                                <?php if ($this->session->flashdata('auth')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('auth') ?>
                                    </div>
                                <?php endif ?>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-primary btn-primary btn-wd btn-lg">Login</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>