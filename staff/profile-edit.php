<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Staff: Profile</title>
</head>

<body>
	<!--navbar container -->
	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>$('#nav-profile').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-md">

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="./profile.php"><i class="fas fa-user"></i> Profile</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-edit"></i> Edit</li>
			</ol>
		</nav>

		<div class="cb-custom-card">
			<div class="row">
				<div class="col-sm-6 mx-auto">
					<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000ffb5832772fb47fabb2e/emb"></script>
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

<!-- script to add inputmaks -->
<script type="text/javascript">
document.addEventListener('DataPageReady', function (event) {
	$('input[name*=Phone]').inputmask({mask: '(999)-999-9999', showMaskOnHover: false, placeholder: 'x'})  
});
</script>

</html>
