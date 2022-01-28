<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header') ?>
</head>

<body>
    <div id="app">
        <?php $this->load->view('layouts/sidebar') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tabel Manajer</h3>
                            <p class="text-subtitle text-muted">List Dari Manajer</p>

                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title float-left">Tabel Manajer</h3>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="<?= site_url('admin/manajer/update') ?>" method="post">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Nama Manajer</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Nama Manajer" id="first-name-icon" name="nama" value="<?= $manajer->nama_manajer ?>">
                                                        <input type="hidden" name="id" value="<?= $manajer->id ?>">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Email Manajer</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Email Manajer" id="email-id-icon" name="email" value="<?= $manajer->email_manajer ?>">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="password-id-icon">Password Manajer</label>
                                                    <div class="position-relative">
                                                        <input type="password" class="form-control" placeholder="Password Manajer Baru" id="password-id-icon" name="password">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-lock"></i>
                                                        </div>
                                                        <input type="hidden" name="password_lama" value="<?= $manajer->password_manajer ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Account Expired Date </label>
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="expired_at" value="<?= $manajer->expired_at ?>">
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Korpora Consulting</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://korporaconsulting.com">Korpora Consulting</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php $this->load->view('layouts/script') ?>
</body>

</html>