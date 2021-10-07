<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header') ?>
</head>

<body>
    <div id="app">
        <div class="container">
            <div id="mainn">
                <div class="page-heading">
                    <!-- <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Result</h3>
                            <p class="text-subtitle text-muted">Result Worksheet</p>

                        </div>
                    </div>
                </div> -->
                    <section class="section">
                        <div class="card text-center shadow-5-strong">
                            <div class="card-body">
                                <h1 class="card-title">Result</h1>
                                <br>
                                <!-- Goal Section -->
                                <div class="row">
                                    <div class="col">
                                        <h3 class="card-title">staff</h3>
                                        <table class="table">
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td><?= $staff->nama_staff ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td><?= $staff->email_staff ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col">
                                        <h3 class="card-title">Goals</h3>
                                        <p class="card-text">
                                            <?= $goal->goal ?>
                                        </p>
                                    </div>
                                </div>
                                <!-- End Goal Section -->

                                <br>
                                <hr style="height: 3px;color:black">

                                <!-- Competence & Motivation Section -->
                                <div class="row">
                                    <div class="col">
                                        <h3 class="card-title">Competence</h3>
                                        <div class="row">
                                            <div class="col">
                                                <h4>Skill
                                                    <br>
                                                    <?php if ($competence->skill == 'low') : ?>
                                                        <div class="btn bg-warning">Low</div>
                                                    <?php elseif ($competence->skill == 'high') : ?>
                                                        <div class="btn bg-info">High</div>
                                                    <?php endif ?>
                                                </h4>
                                            </div>
                                            <div class="col">
                                                <h4>
                                                    Knowledge
                                                    <br>
                                                    <?php if ($competence->knowledge == 'low') : ?>
                                                        <div class="btn bg-warning">Low</div>
                                                    <?php elseif ($competence->knowledge == 'high') : ?>
                                                        <div class="btn bg-info">High</div>
                                                    <?php endif ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3 class="card-title">Motivation</h3>
                                        <div class="row">
                                            <div class="col">
                                                <h4>
                                                    Comitment
                                                    <br>
                                                    <?php if ($motivation->comitment == 'low') : ?>
                                                        <div class="btn bg-warning">Low</div>
                                                    <?php elseif ($motivation->comitment == 'high') : ?>
                                                        <div class="btn bg-info">High</div>
                                                    <?php endif ?>
                                                </h4>
                                            </div>
                                            <div class="col">
                                                <h4>
                                                    Confidence
                                                    <br>
                                                    <?php if ($motivation->confidence == 'low') : ?>
                                                        <div class="btn bg-warning">Low</div>
                                                    <?php elseif ($motivation->confidence == 'high') : ?>
                                                        <div class="btn bg-info">High</div>
                                                    <?php endif ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Competence & Motivation Section -->

                                <br>
                                <hr style="height: 3px;color:black">

                                <!-- Learning Level & Leadership Style Section -->
                                <div class="row">
                                    <div class="col">
                                        <h3>Learning Level</h3>
                                        <h2>
                                            <?= $learning_level->level ?>
                                            <br>
                                            <?php switch ($learning_level->level) {
                                                case "L2/1":
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    echo '<span  class=" mx-1 btn" style="background-color:#FF6D00">Drilling</span>';
                                                    break;
                                                case "L1/2":
                                                    echo '<span  class=" mx-1 btn "style="background-color:#FF6D00">Drilling</span>';
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    break;
                                                case "L1":
                                                    echo '<span  class=" mx-1 btn" style="background-color:#FF6D00">Drilling</span>';
                                                    break;
                                                case "L2":
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    break;
                                                case "L2/3":
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    break;
                                                case "L3/2":
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    break;
                                                case "L3":
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    break;
                                                case "L3/4":
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    echo '<span  class=" mx-1 btn bg-info">Assigning</span>';
                                                    break;
                                                case "L4/3":
                                                    echo '<span  class=" mx-1 btn bg-info">Assigning</span>';
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    break;
                                                case "L4":
                                                    echo '<span  class=" mx-1 btn bg-info">Assigning</span>';
                                                    break;
                                            } ?>
                                        </h2>

                                    </div>
                                    <div class="col">
                                        <h3>Leadership Style</h3>
                                        <h2>
                                            <?= $leadership_style->style ?>
                                            <br>
                                            <?php switch ($leadership_style->style) {
                                                case "S2/1":
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    echo '<span  class=" mx-1 btn" style="background-color:#FF6D00">Drilling</span>';
                                                    break;
                                                case "S1/2":
                                                    echo '<span  class=" mx-1 btn "style="background-color:#FF6D00">Drilling</span>';
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    break;
                                                case "S1":
                                                    echo '<span  class=" mx-1 btn" style="background-color:#FF6D00">Drilling</span>';
                                                    break;
                                                case "S2":
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    break;
                                                case "S2/3":
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    break;
                                                case "S3/2":
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    echo '<span  class=" mx-1 btn bg-warning">Mentoring</span>';
                                                    break;
                                                case "S3":
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    break;
                                                case "S3/4":
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    echo '<span  class=" mx-1 btn bg-info">Assigning</span>';
                                                    break;
                                                case "S4/3":
                                                    echo '<span  class=" mx-1 btn bg-info">Assigning</span>';
                                                    echo '<span  class=" mx-1 btn bg-success">Coaching</span>';
                                                    break;
                                                case "S4":
                                                    echo '<span  class=" mx-1 btn bg-info">Assigning</span>';
                                                    break;
                                            } ?>
                                        </h2>
                                    </div>
                                </div>
                                <!-- End Learning Level & Leadership Style Section -->

                                <br>
                                <hr style="height: 3px;color:black">

                                <!-- Behaviour Section -->
                                <div class="row">
                                    <?php if ($learning_level->level == 'L1' | $learning_level->level == 'L1/2' | $learning_level->level == 'L2/1' | $learning_level->level == 'L2') : ?>
                                        <div class="col mx-auto text-center">
                                            <h3>Directing Behavior</h3>
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
                                        <div class="col mx-auto">
                                            <h3>Directing Behavior</h3>
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

                                        <div class="col mx-auto">
                                            <h3>Supporting Behavior</h3>
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
                                        <div class="col mx-auto">
                                            <h3>Supproting Behaviour</h3>
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
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/script') ?>
    <script>
        window.print()
    </script>
</body>

</html>