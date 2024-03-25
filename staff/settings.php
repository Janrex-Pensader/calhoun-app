<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Staff: Settings</title>
    <style>
        .cb-container-lg{
            width: 1550px !important;
        }
    </style>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>$('#nav-settings').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-cogs"></i> Settings</li>
			</ol>
		</nav>

        <div class="cb-custom-card mb-3">
			<div class="row">
				<div class="col-lg-12 mx-auto">
				</div>
			</div>
		</div>

		<div class="cb-custom-card">
			<div class="row">
				<div class="col-lg-12 mx-auto">
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
