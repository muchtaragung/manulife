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
                            <h3>Tabel Job Desc</h3>
                            <p class="text-subtitle text-muted">List Job Desc Dari Peserta</p>

                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title float-left">Tabel Peserta</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped text-center" id="table1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>ID</th>
                                        <th scope="col">Job Desc</th>
                                        <th>knowledge </th>
                                        <th>skill </th>
                                        <th>comitment </th>
                                        <th>confidence </th>
                                        <th>level </th>
                                        <th>style </th>
                                        <th scope="col">Action
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1;
                                    foreach ($goals as $data) : ?>
                                        <tr>
                                            <td><?= $a++ ?></td>
                                            <td><?= $data->goal_id ?></td>
                                            <td><?= $data->goal ?></td>
                                            <td><?= $data->knowledge ?></td>
                                            <td><?= $data->skill ?></td>
                                            <td><?= $data->comitment ?></td>
                                            <td><?= $data->confidence ?></td>
                                            <td><?= $data->level ?></td>
                                            <td><?= $data->style ?></td>
                                            <td>
                                                <a href="<?= site_url('worksheet/result/' . $data->goal_id) ?>" class="btn btn-outline-primary btn-rounded btn-sm mx-auto my-auto" data-mdb-ripple-color="dark" title="Lihat Result">
                                                    Result
                                                </a>
                                                <button onclick="confirmDelete('<?= site_url('admin/worksheet/delete/' . $data->goal_id) ?>','Job Desc')" class="btn btn-danger btn-rounded btn-sm mx-auto my-auto" data-mdb-ripple-color="dark" title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
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