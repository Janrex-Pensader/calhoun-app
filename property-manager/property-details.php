<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Owner: Properties</title>
	
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
		<?php include '../partials/property-manager-navbar.php';?>
    </div>

	<script>$('#nav-properties').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg">

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./properties.php?cbResetParam=1"><i class="fas fa-home"></i> Properties</a></li>
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-clipboard"></i> Details</li>
			</ol>
		</nav>

        <div class="row mb-3" >
            <!-- edit properties -->
			<div class="col cb-custom-card">
                <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080003547b79c737341e88afa/emb"></script>
			</div>
		</div>
		<div class="row mb-3" >
            <!-- Property files -->
			<div class="col cb-custom-card">
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000c29332bb889e44bb81ea/emb"></script>
			</div>
		</div>
		<div class="row mb-3">
            <!-- Tenant list -->
			<div class="col cb-custom-card">
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080004a2be9ec0cab4eb6ad80/emb"></script>
			</div>
		</div>
        <div class="row mb-3">
            <!-- Cases -->
			<div class="col cb-custom-card">
                <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080000bd836cb1714478d86ea/emb"></script>
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
