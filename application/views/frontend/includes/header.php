<!-- ====== /HEADER BOC ====== -->
<header class="webp-branding-agency-header">

    <!-- /Navigation BOC -->
    <div class="yit-nav">
        <nav class="navbar navbar-expand-md navbar-light yit-nav-light-style yit-bsnav-short-menu yit-custom-slide-right-nav fixed-top img-shadow">

            <!--===== /Custom Toggle Navigation BOC =====-->


            <!--===== /Custom Toggle Navigation EOC =====-->

            <div class="container"> <a class="navbar-brand" href="https://eastfuelconf.com/"><img src="<?php echo site_url('upload/images/logo/' . $system_config->logo); ?>" width="250" height="47" alt="Sea Australia"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- /Mega Menu BOC -->
                    <ul class="navbar-nav ml-auto mx-auto font-weight-medium yit-upcase-nav yit-mega-menu js-nav-active">

                        <li class="nav-item">
                            <a title="Home Page" class="nav-link" href="https://eastfuelconf.com/">Home</a>
                        </li>
                        <?php $userId = $this->session->userdata('userId');
                        if (empty($userId)) { ?>
<!-- 
                            <li class="nav-item">
                                <a title="Register" class="nav-link" href="<?php echo base_url('/registration'); ?>">Register</a>
                            </li>
                            <li class="nav-item">
                                <a title="Login" class="nav-link" href="<?php echo base_url('/login'); ?>">Login</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a title="Logout" class="nav-link" href="<?php echo base_url('/logout'); ?>">Logout</a>
                            </li>
                        <?php } ?>

-->
                    </ul>
                    <!-- /Mega Menu EOC -->
                </div>
            </div>

        </nav>
    </div>
    <!-- /Navigation EOC -->
</header>
<!-- ====== /HEADER EOC ====== -->