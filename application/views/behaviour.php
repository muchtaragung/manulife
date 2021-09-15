<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header.php') ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 mx-auto">
                <form action="<?= site_url('worksheet/save_behaviour') ?>" method="POST">
                    <input type="hidden" name="goal_id" value="<?= $goal_id ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Learning Level</h3>
                            <h1><?= $level->level ?></h1>
                        </div>
                        <div class="col-md-6">
                            <h3>Leadership Style</h3>
                            <h1><?= $style->style ?></h1>
                        </div>
                        <hr>
                        <div class="col-md-6 col-sm-12">
                            <h3>Directing Behaviour</h3>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" name="directing[]" value="Set SMART Goal" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Set SMART Goal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="directing[]" value="Contohkan & Peragakan" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Contohkan & Peragakan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="directing[]" value="Berikan step-stepnya" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Berikan step-stepnya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="directing[]" value="Mengidentifikasi prioritas" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Mengidentifikasi prioritas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="directing[]" value="Klasifikasikan tugas" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Klasifikasikan tugas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="directing[]" value="Develop Action Plan" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Develop Action Plan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="direction" value="Monitor Performance" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Monitor Performance
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h3>Supporting[] Behaviour</h3>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Mendengarkan dengan perhatian" id="flexCheckDefault" name="supporting[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mendengarkan dengan perhatian
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Facilitate problem solving" id="flexCheckChecked" name="supporting[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Facilitate problem solving
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Minta masukan" id="flexCheckChecked" name="supporting[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Minta masukan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Mencari  Why" id="flexCheckChecked" name="supporting[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Mencari "Why"
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Acknowledgement and encourage" id="flexCheckChecked" name="supporting[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Acknowledgement and encourage
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Menceritakan pengalaman perusahaan" id="flexCheckChecked" name="supporting[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Menceritakan pengalaman perusahaan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Menceritakan pengalaman pribadi" id="flexCheckChecked" name="supporting[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Menceritakan pengalaman pribadi
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-lg btn-primary float-right">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('layouts/script.php') ?>
</body>

</html>