<!DOCTYPE HTML>
<html lang="en">
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
    <title>Golf Participants | Eastern Fuel Buyers</title>
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

    <style type="text/css">
		.padding-50{
			padding: 50px;
		}
		.row{
			width: 100%;
			float: left;
		}
		.col-12{
			width: 100%;
			float: left;
		}
		.col-6{
			width: 50%;
			float: left;
		}

		.col-4{
			width: 22%;
			float: left;
			padding: 10px;
		}
		.sel{
			width: 100%;
			/*background-color: green;*/
			border: none;
			padding: 5px;
		}
		/*.pad-top-left-right2{
			padding: 0px 50px 0px 50px;
		}
		.pad-top-left-right{
			padding: 0px 50px 0px 30px;
		}*/

		.margin{
			margin: 0px 50px 0px 50px;
		}
		.row-mm{
			border:1px solid #233E91; 
			padding:10px;
			background-color: #ececec;
		}
	</style>
</head>

<body>
<section class="pt-0">
    <div class="container">
    <div class="col-12 "  >
		
		<div style="width:90%; float: left; ">
			<h2 >There are 65 registered golfers, so currently there will be at least 17 parties of golfers (more when you count the twosomes).</h2>
		</div>
		<div style="width:10%; float: left;"></div>
	</div>
	<div class="col-12 "  >
		
		<ol>
			<li>Click the name of the player you want to move to another group, they will be deleted from their current group</li>
			<li>Make room in the desired group by removing a player from that group</li>
			<li>Assign the players to their new groups by selecting their names from the pulldown menu</li>
		</ol>
	</div>

	<div class="col-4 "  style="padding:10px;">
		<div class="row-mm" >
			<table style="width:100%;">
				<tr>
					<td colspan="4" style="text-align:center;padding:  0px 10px 0px 10px; color: #233E91;" > <h4>Group A</h4></td>
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>

				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
			</table>
		</div>

	</div>




	<div class="col-4 "  style="padding:10px;">
		<div class="row-mm" >
			<table style="width:100%;">
				<tr>
					<td colspan="4" style="text-align:center;padding:  0px 10px 0px 10px; color: #233E91;" > <h4>Group B</h4></td>
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>

				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
			</table>
		</div>

	</div>


	<div class="col-4 "  style="padding:10px;">
		<div class="row-mm" >
			<table style="width:100%;">
				<tr>
					<td colspan="4" style="text-align:center;padding:  0px 10px 0px 10px; color: #233E91;" > <h4>Group C</h4></td>
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>

				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
			</table>
		</div>

	</div>

	<div class="col-4 "  style="padding:10px;">
		<div class="row-mm" >
			<table style="width:100%;">
				<tr>
					<td colspan="4" style="text-align:center;padding:  0px 10px 0px 10px; color: #233E91;" > <h4>Group D</h4></td>
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>

				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="reg_id" size="1" onchange="this.form.submit()" class="sel">
							<option>  Select Attendee </option><option value="221">Don. Bailey</option>	<option value="146">Larry Barbish</option>	<option value="142">Sherrilynn. Calhoun</option>	<option value="160">Rodney Campbell</option>	<option value="111">Pam. Cassels</option>	<option value="231">Andy. Cox</option>	<option value="226">Corey Day</option>	<option value="236">Robert deGroot</option>	<option value="128">Andy. Devlin</option>	<option value="182">Robert Dickmann</option>	<option value="222">David Domogala</option>	<option value="121">Christian Dueweke</option>	<option value="108">Joe Elberts</option>	<option value="112">Blake. Fisher</option>	<option value="188">Luke. Fritz</option>	<option value="116">Jason  Gold</option>	<option value="166">Brian. Houst</option>	<option value="143">John Hunt Jr.</option>	<option value="65">John Keeshan</option>	<option value="46">Nick. Keys</option>	<option value="41">Zach. Kroh</option>	<option value="126">Hyungwoo Lee</option>	<option value="161">Paul Lyon</option>	<option value="185">Gregory. Marmon</option>	<option value="179">Kevin Maro</option>	<option value="37">Terry May</option>	<option value="89">Debby. McBride</option>	<option value="115">John McConaghy</option>	<option value="50">Tim McCoy</option>	<option value="103">Kevin McEwan</option>	<option value="90">Bill McNally</option>	<option value="10">Larry. Miller</option>	<option value="45">Nacho Moran</option>	<option value="136">Wayne Morrison</option>	<option value="26">Mike Nelson</option>	<option value="105">John Ohlson</option>	<option value="225">Bruce. Partridge</option>	<option value="193">Donnie Peake Jr.</option>	<option value="196">Donnie Peake Jr.</option>	<option value="104">Chris Reck</option>	<option value="227">Kerrigan Robin</option>	<option value="214">Tony. Rowser</option>	<option value="217">Doug. Simmons</option>	<option value="252">Mike Taran</option>	<option value="239">Bruce Washburn</option>	<option value="233">Bill. Wolf</option>	<option value="4">Greg Wooten</option>	
						</select>
					</td>
					
				</tr>
			</table>
		</div>

	</div>
    </div>
    </div>
</section>
</body>
</html>