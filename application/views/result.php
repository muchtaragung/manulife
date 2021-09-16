<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header.php') ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-11 mx-auto">
                <div class="card my-5 text-center">
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
                                <br>
                                <h1><?= $learning_level->level ?></h1>
                            </div>
                            <div class="col">
                                <h3>Leadership Style</h3>
                                <h1><?= $leadership_style->style ?></h1>
                            </div>
                        </div>
                        <!-- End Learning Level & Leadership Style Section -->

                        <br>
                        <hr>

                        <!-- Behaviour Section -->
                        <div class="row">
                            <div class="col">
                                <h3>Directing Behaviour</h3>
                                <ul class="list-group">
                                    <?php foreach ($directing as $direct) : ?>
                                        <li class="list-group-item"><?= $direct ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            <div class="col">
                                <h3>Supporting Behaviour</h3>
                                <ul class="list-group">
                                    <?php foreach ($supporting as $support) : ?>
                                        <li class="list-group-item"><?= $support ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <!-- End Behaviour Section -->

                        <br><br>

                        <!-- <button type="button" class="btn btn-primary">Button</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layouts/script.php') ?>
</body>

</html>