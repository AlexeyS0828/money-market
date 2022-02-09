        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>/assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Admin</p>
                        <a href="<?= site_url('/admin') ?>"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">&nbsp;</li>
                    <li><a href="<?= site_url('/admin') ?>"><i class="fa fa-circle-o text-red"></i> <span>Users</span></a></li>
                    <li><a href="<?= site_url('/admin/add-user') ?>"><i class="fa fa-circle-o text-red"></i> <span>Add New User</span></a></li>
                    <li><a href="<?= site_url('/admin/profile') ?>"><i class="fa fa-circle-o text-red"></i> <span>Profile</span></a></li>
                    <li><a href="<?= site_url('/admin') ?>"><i class="fa fa-circle-o text-red"></i> <span>Current Holding</span></a></li>
                    <li><a href="<?= site_url('/admin') ?>"><i class="fa fa-circle-o text-red"></i> <span>Quarterly Statements</span></a></li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>