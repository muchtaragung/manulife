<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <!-- <a href="index.html"><img src="<?= base_url() ?>assets/images/logo/logo.png" alt="Logo" srcset=""></a> -->
                    <p class="text-primary">Employee Analysis</p>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">

            <?php if ($this->session->userdata('login') == 'admin') : ?>
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item  ">
                        <a href="<?= site_url('admin/manajer/list') ?>" class='sidebar-link'>
                            <i class="bi bi-table"></i>
                            <span>List Manajer</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="<?= site_url('auth/logout') ?>" class='sidebar-link'>
                            <i class="bi bi-door-closed"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            <?php elseif ($this->session->userdata('login') == 'manajer') : ?>
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item  ">
                        <a href="<?= site_url('staff') ?>" class='sidebar-link'>
                            <i class="bi bi-table"></i>
                            <span>List Staff</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="<?= site_url('auth/logout') ?>" class='sidebar-link'>
                            <i class="bi bi-door-closed"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            <?php endif ?>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>