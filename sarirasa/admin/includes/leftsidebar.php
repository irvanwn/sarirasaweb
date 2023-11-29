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
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
<div style="height: 24px; display: flex; align-items: center;">
    <a href="../#" style="text-decoration: none; display: flex; align-items: center;">
        <i class="mdi mdi-help-circle-outline" style="font-size: 24px; margin:0 5px 0px 10px; "></i>
        <span style="font-size: 16px; padding: 0px 0;">Help</span>
    </a>
</div>


</div>