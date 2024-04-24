<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Property Manager: Cases</title>

	<style>
		.cb-container-lg{
			width: 1500px !important
		}
		
	</style>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/property-manager-navbar.php';?>
    </div>

	<?php include '../partials/case-details-module.php';?>
	
	<div id="footer">
        <script>load_modal()</script>
    </div>
</body>

</html>
