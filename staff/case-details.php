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

	<script>$('#nav-cases').addClass('active');</script>

	<main role="main" class="container-fluid mb-5">

		<!-- Contents -->
		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item" aria-current="page"><a href="./cases.php?cbResetParam=1&Case_Status_ID=1"><i class="fas fa-File"></i> Cases</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file"></i> Details</li>
			</ol>
		</nav>

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

		<div class="cb-custom-card mt-2 mr-2 row">
			<div class="col-4">
				<!-- Generate Email -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000374bca71fca2476fa5c8/emb"></script>
			</div>
		</div>

		<div class="row">
			<div class="col-6 cb-custom-card mt-2 mr-2">
				<!-- Case Rent and court info -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000f31e691acbe843feb033/emb"></script>
				<!-- Case Tenants -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080005d6aa84e219241b28e3c/emb"></script>
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

		<div class="row">
			<div class="col cb-custom-card mt-2">
				<!-- Case Files -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded0800025c11ecd0e8f4faabe36/emb"></script>
				<!-- Property files Read Only -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000c29332bb889e44bb81ea/emb"></script>
			</div>
		</div>


		<div class="row mt-2">
			<div class="col cb-custom-card mr-2 cb-hide-submit">
				<!-- other info DP -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded0800099c0f5bf6b5d432d9e98/emb"></script>
			</div>
		
			<div class="col cb-custom-card">
			</div>
		</div>

	</main><!-- /.container -->
	<div id="footer" class="mb-5">
        <script>
			load_modal();
			$("#btn-submit-all").removeClass("hide-this");

			// detect unsaved changes
			$(document).ready(function () {
				unsaved = false;

			// Another way to bind the event
				$(window).bind('beforeunload', function() {
					console.log(unsaved);
					if(unsaved){
						return "You have unsaved changes on this page. Are you sure you want to leave?";
					}
				});

				// Monitor dynamic inputs
				$(document).on('focusout paste', 'input', function(){ 
					//triggers change in all input fields including text type
					unsaved = true;
				});

				$(document).on('focusout keyup paste', 'textarea', function(){ 
					//triggers change in all input fields including text type
					unsaved = true;
				});

				$(document).on('propertychange', 'select', function(){ 
					unsaved = true;
				});
			});

			$('#btn-submit-all').click(function() {
				unsaved = false;
			});

			$('button[type="button"]').click(function() {
				unsaved = false;
			});
		</script>
    </div>
</body>

</html>

