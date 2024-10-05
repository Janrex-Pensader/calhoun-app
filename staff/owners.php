<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Staff: Owners</title>
    
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>$('#nav-owners').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->

		<nav class="mt-rem-5 mb-3" aria-label="breadcrumb">
			<span class="h4">Owner List</span>
			<!-- <ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-users"></i> Owners</li>
			</ol> -->
		</nav>

		<div class="cb-custom-card mb-5">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000275cdbb337b0498b9316/emb"></script>
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

<script type="text/javascript">
document.addEventListener('DataPageReady', function (event) {
	$('input[name*=Phone]').inputmask({mask: '(999)-999-9999', showMaskOnHover: false, placeholder: 'x'})  
});
</script>

</html>
