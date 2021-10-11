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

                            <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#inlineForm">
                                Tambah Manajer
                            </button>

                            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Tambah Manajer</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="<?= site_url('admin/manajer/save') ?>" method="post">
                                            <div class="modal-body">
                                                <label>Nama Manajer: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Nama manajer" class="form-control" name="nama">
                                                </div>
                                                <label>Email Manajer: </label>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email manajer" class="form-control" name="email">
                                                </div>
                                                <label>Password Manajer: </label>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password manajer" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Submit</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                                    foreach ($manajer as $man) : ?>
                                        <tr>
                                            <td><?= $a++ ?></td>
                                            <td><?= $man->nama_manajer ?></td>
                                            <td><?= $man->email_manajer ?></td>
                                            <td>
                                                <a href="<?= site_url('admin/manajer/edit/' . $man->id) ?>" class="btn btn-outline-info btn-rounded" data-mdb-ripple-color="dark" title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <button onclick="confirmDelete('<?= site_url('admin/manajer/delete/' . $man->id) ?>','Manajer')" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark" title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <a href="<?= site_url('admin/staff/list/' . $man->id) ?>" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark" title="Staff">
                                                    <i class="bi bi-people"></i>
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
    <script>
        Swal.fire(
            'Berhasil',
            'awokwo',
            'success'
        )
    </script>
    <?php $this->load->view('layouts/script') ?>
    <?php if ($this->session->flashdata('manajer')) : ?>
        <script>
            Swal.fire(
                'Berhasil',
                '<?= $this->session->flashdata('manajer') ?>',
                'success'
            )
        </script>
    <?php endif ?>
    <script>
        function confirmDelete(link, category) {
            Swal.fire({
                title: 'Apakah Anda Ingin Menghapus ' + category,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace(link)
                }
            })
        }
    </script>
</body>

</html>