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
                            <h3>Tabel Goal</h3>
                            <p class="text-subtitle text-muted">List Goal Dari Peserta</p>

                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title float-left">Tabel Peserta</h3>

                            <a href="<?= site_url('worksheet/' . $staff_id) ?>" class="btn btn-success float-right">
                                Tambah Worksheet
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Goal</th>
                                        <th scope="col">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1;
                                    foreach ($goals as $goal) : ?>
                                        <tr>
                                            <td><?= $a++ ?></td>
                                            <td><?= $goal->goal ?></td>
                                            <td>
                                                <a href="<?= site_url('result/' . $goal->id) ?>" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">
                                                    Lihat Result
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