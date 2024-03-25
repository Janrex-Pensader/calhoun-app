<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Owner: Tenants</title>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/owner-navbar.php';?>
    </div>

	<script>$('#nav-tenants').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item" aria-current="page"><a href="./tenants.php?cbResetParam=1"><i class="fas fa-users"></i> Tenants</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-edit"></i> Details</li>
			</ol>
		</nav>

		<div class="cb-custom-card">
			<div class="row">
				<div class="col-lg-12 mx-auto">
                    <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000fa4e882b89164ecaae17/emb"></script>
				</div>
			</div>
		</div>

	</main><!-- /.container -->
</body>

<!-- script to add inputmaks -->
<script type="text/javascript">
document.addEventListener('DataPageReady', function (event) {
	$('input[name*=Phone]').inputmask({mask: '(999)-999-9999', showMaskOnHover: false, placeholder: 'x'})  
});
</script>

</html>
