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
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Worksheet</h4>
                                </div>
                                <div class="card-content">
                                    <form action="<?= site_url('worksheet/save_worksheet') ?>" method="POST">
                                        <input type="hidden" name="peserta_id" value="<?= $peserta_id ?>">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Goals</label>
                                                    <br>
                                                    <textarea name="goal" id="" cols="30" rows="5" class="form-control" required></textarea>
                                                </div>
                                                <div class="col-md-6 col-sm-12 justify-content-center">
                                                    <h3>Competence</h3>
                                                    <div class="form-group">
                                                        <label for="">Skill</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name='skill' type="radio" value="low" required>
                                                            <label class="form-check-label">Low</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name='skill' type="radio" value="high" required>
                                                            <label class="form-check-label">High</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Knowledge</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name='knowledge' type="radio" value="low" required>
                                                            <label class="form-check-label">Low</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name='knowledge' type="radio" value="high" required>
                                                            <label class="form-check-label">High</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 justify-content-center">
                                                    <h3>Motivation</h3>
                                                    <div class="form-group">
                                                        <label for="">Comitment</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name="comitment" type="radio" value="low" required>
                                                            <label class="form-check-label">Low</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name="comitment" type="radio" value="high" required>
                                                            <label class="form-check-label">High</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Confidence</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name="confidence" type="radio" value="low" required>
                                                            <label class="form-check-label">Low</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name="confidence" type="radio" value="high" required>
                                                            <label class="form-check-label">High</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-lg btn-primary">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Vertical form layout section end -->
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