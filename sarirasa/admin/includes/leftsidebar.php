<div class="left side-menu bgblack">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigasi</li>

                <li class="has_sub">
                    <a href="dashboard.php" class="waves-effect hovercolor"><i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span> </a>
                </li>
                <?php
                    if ($_SESSION['role'] == 1) {
                ?>
                    <li class="has_sub">
                        <a href="activity-log.php" class="waves-effect hovercolor"><i class="mdi mdi-walk"></i>
                            <span> Activity Log </span> </a>
                    </li>
                <?php
                    }
                ?>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect hovercolor"><i
                            class="mdi mdi-format-list-bulleted"></i> <span> Highlight </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-post.php">Tambah Highlight</a></li>
                        <li><a href="manage-posts.php">Olah Highlight</a></li>
                        <li><a href="trash-posts.php">Hapus Highlight</a></li>
                    </ul>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect hovercolor"><i
                            class="mdi mdi-format-list-bulleted"></i> <span> Halaman </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="changecontact.php">Ubah Kontak</a></li>
                        <!-- <li><a href="dashboard.php">Contact us</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>