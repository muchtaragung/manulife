<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header.php') ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-11 mx-auto">
                <div class="card my-5 text-center shadow-5-strong">
                    <div class="card-body">
                        <h1 class="card-title">Result</h1>
                        <br>
                        <!-- Goal Section -->
                        <div class="row">
                            <div class="col">
                                <h3 class="card-title">Goals</h3>
                                <p class="card-text">
                                    <?= $goal->goal ?>
                                </p>
                            </div>
                        </div>
                        <!-- End Goal Section -->

                        <br>
                        <hr>

                        <!-- Competence & Motivation Section -->
                        <div class="row">
                            <div class="col">
                                <h3 class="card-title">Competence</h3>
                                <div class="row">
                                    <div class="col">
                                        <h4>Knowledge</h4>
                                        <p class="card-text"><?= $competence->knowledge ?></p>
                                    </div>
                                    <div class="col">
                                        <h4>Skill</h4>
                                        <p class="card-text"><?= $competence->skill ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h3 class="card-title">Motivation</h3>
                                <div class="row">
                                    <div class="col">
                                        <h4>Comitment</h4>
                                        <p class="card-text"><?= $motivation->comitment ?></p>
                                    </div>
                                    <div class="col">
                                        <h4>Confidence</h4>
                                        <p class="card-text"><?= $motivation->confidence ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Competence & Motivation Section -->

                        <br>
                        <hr>

                        <!-- Learning Level & Leadership Style Section -->
                        <div class="row">
                            <div class="col">
                                <h3>Learning Level</h3>
                                <h1>
                                    <?= $learning_level->level ?>
                                    <br>
                                    <?php switch ($learning_level->level) {
                                        case "L2/1":
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            echo "<br>";
                                            echo '<span class="badge" style="background-color:#FF6D00">Drilling</span>';
                                            break;
                                        case "L1/2":
                                            echo '<span class="badge "style="background-color:#FF6D00">Drilling</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            break;
                                        case "L1":
                                            echo '<span class="badge" style="background-color:#FF6D00">Drilling</span>';
                                            break;
                                        case "L2":
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            break;
                                        case "L2/3":
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            break;
                                        case "L3/2":
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            break;
                                        case "L3":
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            break;
                                        case "L3/4":
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-info">Assigning</span>';
                                            break;
                                        case "L4/3":
                                            echo '<span class="badge bg-info">Assigning</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            break;
                                        case "L4":
                                            echo '<span class="badge bg-info">Assigning</span>';
                                            break;
                                    } ?>
                                </h1>

                            </div>
                            <div class="col">
                                <h3>Leadership Style</h3>
                                <h1>
                                    <?= $leadership_style->style ?>
                                    <br>
                                    <?php switch ($leadership_style->style) {
                                        case "S2/1":
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            echo "<br>";
                                            echo '<span class="badge" style="background-color:#FF6D00">Drilling</span>';
                                            break;
                                        case "S1/2":
                                            echo '<span class="badge "style="background-color:#FF6D00">Drilling</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            break;
                                        case "S1":
                                            echo '<span class="badge" style="background-color:#FF6D00">Drilling</span>';
                                            break;
                                        case "S2":
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            break;
                                        case "S2/3":
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            break;
                                        case "S3/2":
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-warning">Mentoring</span>';
                                            break;
                                        case "S3":
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            break;
                                        case "S3/4":
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-info">Assigning</span>';
                                            break;
                                        case "S4/3":
                                            echo '<span class="badge bg-info">Assigning</span>';
                                            echo "<br>";
                                            echo '<span class="badge bg-success">Coaching</span>';
                                            break;
                                        case "S4":
                                            echo '<span class="badge bg-info">Assigning</span>';
                                            break;
                                    } ?>
                                </h1>
                            </div>
                        </div>
                        <!-- End Learning Level & Leadership Style Section -->

                        <br>
                        <hr>

                        <!-- Behaviour Section -->
                        <h3>Behaviour</h3>
                        <div class="row">
                            <?php if ($learning_level->level == 'L1' | $learning_level->level == 'L1/2' | $learning_level->level == 'L2/1' | $learning_level->level == 'L2') : ?>
                                <div class="col-md-6 col-sm-12 mx-auto">
                                    <ul class="list-group">
                                        <li class="list-group-item">Set Smart Goal</li>
                                        <li class="list-group-item">Contohkan Dan Peragakan</li>
                                        <li class="list-group-item">Berikan Step Stepnya</li>
                                        <li class="list-group-item">Mengidentifikasi Proses</li>
                                        <li class="list-group-item">Klasifikasikan Tugas</li>
                                        <li class="list-group-item">Develop Action Plans</li>
                                        <li class="list-group-item">Monitor Performance</li>
                                    </ul>
                                </div>
                            <?php elseif ($learning_level->level == 'L2/3' | $learning_level->level == 'L3/2') : ?>
                                <div class="col-md-6 col-sm-12 mx-auto">
                                    <ul class="list-group">
                                        <li class="list-group-item">Set Smart Goal</li>
                                        <li class="list-group-item">Contohkan Dan Peragakan</li>
                                        <li class="list-group-item">Berikan Step Stepnya</li>
                                        <li class="list-group-item">Mengidentifikasi Proses</li>
                                        <li class="list-group-item">Klasifikasikan Tugas</li>
                                        <li class="list-group-item">Develop Action Plans</li>
                                        <li class="list-group-item">Monitor Performance</li>
                                    </ul>
                                </div>

                                <div class="col-md-6 col-sm-12 mx-auto">
                                    <ul class="list-group">
                                        <li class="list-group-item">Mendengarkan Dengan Perhatian</li>
                                        <li class="list-group-item">Facilitate Problem Solving</li>
                                        <li class="list-group-item">Minta Masukan</li>
                                        <li class="list-group-item">Mencari Why</li>
                                        <li class="list-group-item">Acknowledge and encourage</li>
                                        <li class="list-group-item">Menceritakan Pengalaman Perusahaan</li>
                                        <li class="list-group-item">Menceritakan Pengalaman Pribadi</li>
                                    </ul>
                                </div>
                            <?php elseif ($learning_level->level == 'L3' | $learning_level->level == 'L3/4' | $learning_level->level == 'L4/3' | $learning_level->level == 'L4') : ?>
                                <div class="col-md-6 col-sm-12 mx-auto">
                                    <ul class="list-group">
                                        <li class="list-group-item">Mendengarkan Dengan Perhatian</li>
                                        <li class="list-group-item">Facilitate Problem Solving</li>
                                        <li class="list-group-item">Minta Masukan</li>
                                        <li class="list-group-item">Mencari Why</li>
                                        <li class="list-group-item">Acknowledge and encourage</li>
                                        <li class="list-group-item">Menceritakan Pengalaman Perusahaan</li>
                                        <li class="list-group-item">Menceritakan Pengalaman Pribadi</li>
                                    </ul>
                                </div>
                            <?php endif ?>

                        </div>
                        <!-- End Behaviour Section -->

                        <br>
                        <a href="<?= site_url('worksheet') ?>" class="btn btn-lg btn-primary">Back</a>
                        <button onclick="window.print();" class="btn btn-lg brn-danger">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layouts/script.php') ?>
</body>

</html>