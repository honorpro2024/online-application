<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">MENU</li>
                <li>
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.users.index')); ?>" class="waves-effect <?php echo e(request()->routeIs('admin.users.index') ? 'active' : ''); ?>">
                        <i class="fa fa-users"></i>
                        <span> Users </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div><?php /**PATH /var/www/html/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>