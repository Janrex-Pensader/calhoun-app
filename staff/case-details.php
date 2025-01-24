<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>

    
	<link rel="stylesheet" href="../css/case-details.css" media="screen" title="no title" charset="utf-8" />
	<title>Staff: Cases</title>

	<style>
		.cb-container-lg{
			width: 1500px !important
		}

		/* input[name="Mod0EditRecord"] {
			display: none !important;
		} */

		.cbBackButtonContainer{
			display: none !important;
		}
	</style>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>


	<main role="main" class="container-fluid mb-5">

		<!-- case details navbar -->
        <?php include '../partials/case-details-navbar.php';?>

        <script>
            $('#nav-cases').addClass('active');
            $('#nav-case-details').addClass('active');
        </script>

        <!-- Contents -->
		<div class="row">
			<div class="col cb-custom-card mr-2">
				<!-- Case Basic Info -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080007dadc86af30945168d50/emb"></script>
			</div>
			<div class="col-4 cb-custom-card">
				<!-- Case Status-->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded0800051b35e4bbb7b485d9e96/emb"></script>
			</div>
		</div>

		<div class="mt-2 mr-2 row cb-border-rad" style="background: #fff;">
			<div class="col-4">
				<!-- Generate Email -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000374bca71fca2476fa5c8/emb"></script>
			</div>
			<div class="col-4">
				<!-- Generate SMS -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080001d6e780f77b1426c91eb/emb"></script>
			</div>
			<div class="col-4">
				<!-- Generate PDF -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000aabed53787e34c9f8978/emb"></script>
				<!-- Hidden DP for logging in Case History -->
			<div style="display: none">
				 <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000fb3759c5a50d4f588d0a/emb"></script>
			</div>
				
			</div>
		</div>

		<div class="row">
			<div class="col-6 cb-custom-card mt-2 mr-2">
				<!-- Case Rent and court info -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000f31e691acbe843feb033/emb"></script>
			</div>

			<div class="col cb-custom-card mt-2">
				<!-- Court Details -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000eae4ea1894924d0ca0b7/emb"></script>
			</div>
		</div>

		<div class="row">
			<div class="col cb-custom-card mt-2">
				<!-- Case History -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000388a31e813f040bba3a2/emb"></script>
			</div>
		</div>

	</main><!-- /.container -->
	<div id="footer" class="mb-5">
        <script type="text/javascript" src="../js/case-details-navbar-script.js"></script>
        <script type="text/javascript" src="../js/case-error-checks.js"></script>
    </div>
</body>
</html>

