<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md no-print">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="<?php echo site_url('upload/user/' . $photo); ?>" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold"><?php echo $current_user->firstName;  ?></div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;<?php echo $current_user->address;  ?>
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="<?php echo base_url('admin/setting/user') ?>" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin')  ?>" class="nav-link">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/addattendee')  ?>" class="nav-link">
                        <i class="icon-stack"></i>
                        <span>
                            Add Attendee
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/registereduser')  ?>" class="nav-link">
                        <i class="icon-stack"></i>
                        <span>
                            Registered Attendees
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/attendee')  ?>" class="nav-link">
                        <i class="icon-stack"></i>
                        <span>
                            Attendees List
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/grouping')  ?>" class="nav-link">
                        <i class="icon-stack"></i>
                        <span>
                            Grouping
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/transections')  ?>" class="nav-link">
                        <i class="icon-stack"></i>
                        <span>
                            Payment
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Settings</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="<?php echo base_url('admin/setting/company')  ?>" class="nav-link">Company Setting</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('admin/setting/password')  ?>" class="nav-link">Change Password</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('admin/setting/user')  ?>" class="nav-link">User Setting</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->


    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->