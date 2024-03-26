<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Staff: Tenant Details</title>
</head>

<body>
	<!--navbar container -->
	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>$('#nav-profile').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-md">

		<!-- Contents -->
		<!-- <h3 class="mt-3">Profile</h3> -->

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><a href="./tenants.php?cbResetParam=1"><i class="fas fa-users"></i> Tenants</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-edit"></i> Details</li>
			</ol>
		</nav>

        <div class="row cb-custom-card">
            <div class="cb-form-resp cb-form-fluid">
                <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080009842f5de1ca94b7ca24f/emb"></script>
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
