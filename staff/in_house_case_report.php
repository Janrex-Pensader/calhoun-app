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

	<script>
        $('#nav-reports').addClass('active');
        $('#nav_in_house_case_report').addClass('active');
    </script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->

		<nav class="mt-rem-5 mb-3" aria-label="breadcrumb">
			<span class="h4">In House Case Report</span>
			<!-- <ol class="breadcrumb mt-3">
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-clipboard"></i> Cases</li>
			</ol> -->
		</nav>

		<div class="cb-custom-card">
			<div class="row">
				<div class="col-lg-12 mx-auto">
                <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000d7ab03cee236404cb63f/emb"></script>
				</div>
			</div>
		</div>

	</main><!-- /.container -->

	<!-- modal container -->
	<div id="footer">
            <script>load_modal()</script>
        </div>
    <!-- ./modal container -->
</body>

</html>
