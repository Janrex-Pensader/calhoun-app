<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Staff: Reports</title>
    
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>$('#nav-reports').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-clipboard"></i> Reports</li>
			</ol>
		</nav>

		
		<div class="row ">
			<div class="col-lg-6 cb-custom-card mr-2">
				<span class="h5 mb-3">Eviction Reports</span>
				<ul>
					<li><a href="#">Court Summary Report</a></li>
					<li><a href="#">Active Cases Report</a></li>
					<li><a href="#">Case Stage Report</a></li>
					<li><a href="#">Eviction Summary Report</a></li>
					<li><a href="#">Closed Case Report</a></li>
					<li><a href="#">Case By Plan Report</a></li>
					<li><a href="#">Cases By Account</a></li>
					<li><a href="#">Virtual Folder Check Report</a></li>
					<li><a href="#">Virtual Folder Check Report</a></li>
					<li><a href="#">THO Pending Vacate</a></li>
				</ul>
			</div>
			<div class="col cb-custom-card ml-2">
				<span class="h5 mb-3">Property Management Reports</span>
				<ul>
					<li><a href="#">Message Summary Report</a></li>
					<li><a href="#">Rental License Expiration Report</a></li>
					<li><a href="#">Current Key Report</a></li>
					<li><a href="#">Upcoming Property Inspection Report</a></li>
					<li><a href="#">Active managed Properties</a></li>
				</ul>
			</div>
		</div>

	</main><!-- /.container -->

	<!-- modal container -->
	<div id="footer">
            <script>load_modal()</script>
        </div>
    <!-- ./modal container -->
</body>

<script type="text/javascript">
document.addEventListener('DataPageReady', function (event) {
	$('input[name*=Phone]').inputmask({mask: '(999)-999-9999', showMaskOnHover: false, placeholder: 'x'})  
});
</script>

</html>
