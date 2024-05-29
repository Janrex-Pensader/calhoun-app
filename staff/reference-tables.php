<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Staff: Reference Tables</title>
    <style>
        .cb-container-lg{
            width: 1250px !important;
        }
    </style>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>$('#nav_user_screen').addClass('active');</script>
    <script>$('#nav-settings').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-users"></i> Reference Tables</li>
			</ol>
		</nav>

		<div class="cb-custom-card mb-3">
			<div class="row">
				<div class="col-12 mx-auto">
                    <!-- Tabular - Reference Table - Look up -->
                    <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000489b4544d6bd4510979c/emb"></script>
                    
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
