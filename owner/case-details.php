<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Owner: Cases</title>
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
				<li class="breadcrumb-item" aria-current="page"><a href="./cases.php?cbResetParam=1&Case_Status_ID=1"><i class="fas fa-File"></i> Cases</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file"></i> Details</li>
			</ol>
		</nav>

		<div class="cb-custom-card mb-3">
			<div class="row">
				<div class="col-lg-12 mx-auto">
				</div>
			</div>
		</div>

	</main><!-- /.container -->
	<div id="footer">
        <script>load_modal()</script>
    </div>
</body>

</html>
