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
                                <a class="btn btn-primary float-right" href="<?= site_url('peserta/') ?>">
                                    Back
                                </a>
                                <a class="btn btn-primary float-right" href="<?= site_url('worksheet/' . $peserta_id) ?>">
                                    Tambah Goal
                                </a>

                                <table class="table text-center">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layouts/script.php') ?>
</body>

</html>