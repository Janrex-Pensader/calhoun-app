<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Owner: Profile</title>
</head>

<body>
	<!--navbar container -->
	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/owner-navbar.php';?>
    </div>

	<script>$('#nav-profile').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-md mb-5">

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="./profile.php"><i class="fas fa-user"></i> Profile</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-edit"></i> Edit</li>
			</ol>
		</nav>

		<div class="cb-custom-card">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080000d0ebbcb9d6f40f89f6b/emb"></script>
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
