<div class="vertical-menu">

<div data-simplebar class="h-100">

    <div class="navbar-brand-box">
        <a href="index.html" class="logo">
            <img src="<?= base_url('public/')?>images/logo-light.png" />
        </a>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="<?= base_url(); ?>" class="waves-effect"><i class='bx bx-home-smile'></i><span>Dashboard</span></a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-user-plus"></i><span>Pengguna</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?= base_url('daftar_pengguna'); ?>">Daftar Pengguna</a></li>
                    <li><a href="<?= base_url('tambah_pengguna'); ?>">Tambah Pengguna</a></li>
                </ul>
            </li>

            <li class="menu-title">More</li>

            <li>
                <a href="<?= base_url('login'); ?>" class="waves-effect"><i class='bx bx-home-smile'></i><span>Logout</span></a>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>