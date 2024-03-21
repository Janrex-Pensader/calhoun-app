<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Owner: Cases</title>

	<style>
		.cb-container-lg{
			width: 1500px !important
		}
	</style>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/owner-navbar.php';?>
    </div>

	<script>$('#nav-cases').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->
		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item" aria-current="page"><a href="./cases.php?cbResetParam=1&Case_Status_ID=1	"><i class="fas fa-File"></i> Cases</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file"></i> Details</li>
			</ol>
		</nav>


		<div class="row mb-3">
			<div class="col-lg-12 cb-custom-card mx-auto">
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080000f21b6db76e345d0b5a5/emb"></script>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col cb-custom-card mr-3">
				<!-- tenants list per case -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080005d6aa84e219241b28e3c/emb"></script>
			</div>
			<div class="col-lg-5 cb-custom-card">
			</div>
		</div>

	</main><!-- /.container -->
	<div id="footer">
        <script>load_modal()</script>
    </div>
</body>

</html>
