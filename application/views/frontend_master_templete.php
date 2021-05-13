<!DOCTYPE HTML>
<html lang="en">
<?php $system_config = $this->CommonModel->get_single_data_by_single_column('nso_sysconfig', 'id', 1); ?>

<head>
    <!-- =================== /META BOC ==================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Zeeshan Akhtar">

    <meta name="contact" content="Zeeshan@nsotechnologies.com" />
    <meta name="copyright" content="Zeeshan">

    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <!-- =================== /META EOC ==================== -->

    <!-- =================== /TITLE EOC ==================== -->
    <title><?php if (!empty($title)) {
                echo $title . " | ";
            } ?> Eastern Fuel Buyers</title>
    <!-- =================== /TITLE EOC ==================== -->

    <!-- =================== /FAVICON BOC ==================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('assets/frontend/images/favicon/favicon-32x32.png'); ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url('assets/frontend/images/favicon/favicon-32x32.png'); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('assets/frontend/images/favicon/favicon-32x32.png'); ?>" />
    <!-- =================== /FAVICON EOC ==================== -->

    <!-- =================== /WEB CSS BOC ==================== -->

    <!-- /Bootstrap CSS -->
    <link href="<?php echo site_url('assets/frontend/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Plugins CSS (include all plugins) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-plugins.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Style CSS (scafolding, strucrure & commonpages) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-style.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Boostrap Nav CSS (all navigation) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-bootstrap-nav.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Custom Nav CSS (all custom navigation) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-custom-nav.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Theme CSS (common theme element) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-theme.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Elements CSS (all general elements) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-elements.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Shortcode CSS (all shortcodes) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-shortcodes.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Blogs CSS (all blogs) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-blog.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Responsive CSS (media device css) -->
    <link href="<?php echo site_url('assets/frontend/css/yit-responsive.css'); ?>" rel="stylesheet" type="text/css">

    <!-- /Multiselect CSS -->
    <link href="<?php echo site_url('assets/frontend/css/plugins/bootstrap-multiselect.min.css'); ?>" rel="stylesheet" type="text/css">


    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.css">



    <!-- =================== /WEB CSS EOC ==================== -->

    <!-- ================ /GOOGLE FONT BOC =================== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- ================ /GOOGLE FONT EOC =================== -->

    <!-- <script src="https://www.w3counter.com/tracker.js?id=128746"></script> -->

    <!-- Jquery Libraries -->
    <script src="<?php echo site_url('assets/frontend/js/vendor/jquery.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/vendor/popper.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/vendor/modernizr.js'); ?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo site_url('assets/frontend/js/vendor/bootstrap.min.js'); ?>"></script>

    <!-- Multiselect -->
    <script src="<?php echo site_url('assets/frontend/js/plugins/bootstrap-multiselect.min.js'); ?>"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" defer></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('.data-table').DataTable({
                // "order": [[ 1, "asc" ]],
                "aaSorting": [],
                "bPaginate": false,
                "searching": false, 
                "paging": false, 
                "info": false
            });
            

             $('.cust_multiselect').multiselect();
        });

        var base_url = "<?php echo base_url('/'); ?>";

        function success_cart_cust() {
            let customNewButtons = {
                cart: "View Cart",
                cancel: "Continue"
            }
            swal({
                title: "Added",
                text: "Product has added to cart",
                icon: "success",
                timer: 3000,
                buttons: customNewButtons,
            }).then((value) => {
                switch (value) {
                    case "cart":
                        window.location.href = base_url + "viewcart";
                        break;
                    default:

                }
                swal.close();
            });
        }

        function failed_cart_cust() {
            swal({
                title: "Error",
                text: "Something Went Wrong. Try again!",
                icon: "warning",
                timer: 3000
            });
            return false;
        }
    </script>
</head>

<body class="webp-feature-nav">

    <!-- ====== /WRAPPER BOC ====== -->

    <div class="page-wrapper" id="main_content">

        <!-- ====== /HEADER BOC ====== -->
        <!-- ====== /HEADER EOC ====== -->

        <!-- ====== /Message BOC ====== -->
        <div class="container">
            <?php include 'application/views/admin/includes/message.php'; ?>
        </div>
        <!-- ====== /Message EOC ====== -->


        <!-- ====== /CONTENT BOC ====== -->
        <?php
        if (!empty($mainContent)) {
            echo $mainContent;
        }
        ?>
        <!-- ====== /CONTENT EOC ====== -->

        <!-- ====== /FOOTER BOC ====== -->
        
       
        
        <!-- ====== /FOOTER EOC ====== -->

    </div>
    <!-- ====== /WRAPPER EOC ====== -->

    <!-- Placed at the end of the document so the pages load faster -->
    <!-- =================== /WEB JS BOC ==================== -->


    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyABymk0D2BHYj9t9GYwOUQDQpqolk9Y3RM"></script> -->


    <!-- Parallax Plugins JS -->
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.easing.1.3.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.stellar.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.parallax-scroll.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.parallaxify.js'); ?>"></script>

    <!-- Carousel Slider Plugins JS -->
    <script src="<?php echo site_url('assets/frontend/js/plugins/flexslider.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/slick.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/owl.carousel.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/swiper.min.js'); ?>"></script>

    <!-- Images Filter Plugins JS -->
    <script src="<?php echo site_url('assets/frontend/js/plugins/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/imagesloaded.pkgd.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/classie.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.justifiedGallery.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/retina.min.js'); ?>"></script>

    <!-- Other Miscellaneous Plugins JS -->
    <script src="<?php echo site_url('assets/frontend/js/plugins/wow.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/countup.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/in-view.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.magnific-popup.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/easypiechart.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/skill.bars.jquery.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/countdown.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/instafeed.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/validate-min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.fitvids.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.nicescroll.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/moment.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/frontend/js/plugins/jquery.fitvids.js'); ?>"></script>

    <!-- Custom Navigation JS (add this js when use want to used coustom navigation) -->
    <script src="<?php echo site_url('assets/frontend/js/yit-custom-nav.js'); ?>"></script>

    <!-- Custom JS Developed By Yankee Themes -->
    <script src="<?php echo site_url('assets/frontend/js/yit-custom.js'); ?>"></script>

    <!-- Particular Page JS (add your page js here) -->

    <!-- =================== /WEB JS BOC ==================== -->
</body>

</html>