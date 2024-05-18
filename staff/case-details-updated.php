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

		<div class="row">
			<div class="col-6 cb-custom-card mt-2 mr-2">
				<!-- Case Rent -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000f31e691acbe843feb033/emb"></script>
			</div>

			<div class="col cb-custom-card mt-2">
				<!-- Court Details -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000eae4ea1894924d0ca0b7/emb"></script>
			</div>

		</div>
		

	</main><!-- /.container -->
	
	<div id="footer">
        <script>load_modal()</script>
    </div>
</body>

</html>
