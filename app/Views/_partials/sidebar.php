<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <!-- level 0 -->
        <li>
            <a href="<?= site_url('/') ?>">
                <i class="mdi mdi-view-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- /.level 0 -->

        <!-- level 1 -->
        <li>
            <a href="javascript: void(0);">
                <i class="mdi mdi-database"></i>
                <span>Data Master </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="<?= site_url('master-departments') ?>">Departemen</a></li>
                <li><a href="<?= site_url('master-positions') ?>">Posisi</a></li>
                <li><a href="<?= site_url('master-employees') ?>">Karyawan</a></li>
            </ul>
        </li>
        <!-- /.level 1 -->

    </ul>

</div>
<!-- End Sidebar -->
