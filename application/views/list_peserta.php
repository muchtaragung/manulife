<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header.php') ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 mx-auto">
                <div class="card my-5 shadow-5-strong">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mx-1">
                                <!-- Button trigger modal -->
                                <button class="btn btn-primary float-right" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                                    Tambah Peserta
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= site_url('peserta/save') ?>" method="post">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Peserta</h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" name="nama" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" id="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Act</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layouts/script.php') ?>
</body>

</html>