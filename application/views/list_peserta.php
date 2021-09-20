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
                            <h3>Tabel Peserta</h3>
                            <p class="text-subtitle text-muted">List Dari Peserta</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Tabel Peserta
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1;
                                    foreach ($peserta as $pes) : ?>
                                        <tr>
                                            <td><?= $a++ ?></td>
                                            <td><?= $pes->nama ?></td>
                                            <td><?= $pes->email ?></td>
                                            <td>
                                                <a href="<?= site_url('goals/' . $pes->id) ?>" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">
                                                    Lihat Goal
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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