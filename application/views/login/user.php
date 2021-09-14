<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/header.php') ?>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
            #intro {
                background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
                height: 100vh;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #intro {
                    margin-top: -58.59px;
                }
            }
        </style>

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <form class="bg-white  rounded-5 shadow-5-strong p-5" method="post" action="<?= site_url('auth') ?>">

                                <h4 class="mb-1">Login</h4>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form1Example1" class="form-control" name="email" />
                                    <label class="form-label" for="form1Example1">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form1Example2" class="form-control" name="password" />
                                    <label class="form-label" for="form1Example2">Password</label>
                                </div>

                                <?php if ($this->session->flashdata('auth')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('auth') ?>
                                    </div>
                                <?php endif ?>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->
</body>

</html>