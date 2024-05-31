<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Owner: Cases</title>

	<style>
		.cb-container-lg{
			width: 1500px !important
		}

		input[name="Mod0EditRecord"] {
			display: none !important;
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
				<li class="breadcrumb-item" aria-current="page"><a href="./cases.php?cbResetParam=1&Case_Status_ID=1"><i class="fas fa-File"></i> Cases</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file"></i> Details</li>
			</ol>
		</nav>

		<div class="row mb-3">
			<div class="col-lg-12 cb-custom-card mx-auto">
				<!-- case Downloads -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000aabed53787e34c9f8978/emb"></script>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col-lg-12 cb-custom-card mx-auto">
				<!-- Case Details -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080000f21b6db76e345d0b5a5/emb"></script>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col-lg-12 cb-custom-card mx-auto">
				<!-- Case History -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000388a31e813f040bba3a2/emb"></script>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col-lg-12 cb-custom-card mx-auto">
				<!-- Case Files -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000df46e8a4b5c940379976/emb"></script>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col-lg-8 cb-custom-card pl-0 mr-3">
				<!-- Tenant List -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080005d6aa84e219241b28e3c/emb"></script>
			</div>

			<div class="col cb-custom-card">
				<!-- Court details -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080006e4254cc6dd64a738c0a/emb"></script>
			</div>
		</div>

	</main><!-- /.container -->
	
	<div id="footer">
	<script>
		load_modal()
		$("#btn-submit-all").removeClass("hide-this");

		// detect unsaved changes
		$(document).ready(function () {
		// Another way to bind the event
			$(window).bind('beforeunload', function() {
				if(unsaved){
					return "You have unsaved changes on this page. Are you sure you want to leave?";
				}
			});

			// Monitor dynamic inputs
			$(document).on('change', ':input', function(){ //triggers change in all input fields including text type
				unsaved = true;
			});
		});

		$('#btn-submit-all').click(function() {
			unsaved = false;
		});
	</script>
    </div>
</body>

</html>
