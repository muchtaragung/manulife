<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header.php') ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 mx-auto">
                <form action="<?= site_url('worksheet/save-worksheet') ?>">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 justify-content-center">
                            <h3>Competence</h3>
                            <div class="form-group">
                                <label for="">Knowledge</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name='knowledge' type="radio" value="low">
                                    <label class="form-check-label">Low</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name='knowledge' type="radio" value="high">
                                    <label class="form-check-label">High</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Skill</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name='skill' type="radio" value="low">
                                    <label class="form-check-label">Low</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name='skill' type="radio" value="high">
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
                                    <input class="form-check-input" name="comitment" type="radio" value="low">
                                    <label class="form-check-label">Low</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="comitment" type="radio" value="high">
                                    <label class="form-check-label">High</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Confidence</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="confidence" type="radio" value="low">
                                    <label class="form-check-label">Low</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="confidence" type="radio" value="high">
                                    <label class="form-check-label">High</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('layouts/script.php') ?>
</body>

</html>