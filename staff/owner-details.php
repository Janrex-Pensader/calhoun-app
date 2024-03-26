<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Staff: Owner Details</title>
    <style>
        .cb-container-lg{
            width: 1550px !important;
        }

		form[action*='ded08000a619d2b2b48549269abd'] tr.cbResultSetDataRow td:nth-child(1),
		form[action*='ded08000a619d2b2b48549269abd'] tr.cbResultSetTableHeader th:nth-child(1),
		form[action*='ded08000a619d2b2b48549269abd'] tr.cbResultSetDataRow td:nth-child(2),
		form[action*='ded08000a619d2b2b48549269abd'] tr.cbResultSetTableHeader th:nth-child(2),
		form[action*='ded08000a619d2b2b48549269abd'] tr.cbResultSetDataRow td:nth-child(3),
		form[action*='ded08000a619d2b2b48549269abd'] tr.cbResultSetTableHeader th:nth-child(3){
			display: none !important
		}
    </style>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>$('#nav-owners').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->

		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><a href="./owner.php?cbResetParam=1"><i class="fas fa-users"></i> Owners </a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-edit"></i> Details</li>
			</ol>
		</nav>

		<!-- owner details -->
		<div class="row cb-custom-card mb-3">
			<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080009c7d628634c34b7c9711/emb"></script>
		</div>
		<!-- property details -->
        <div class="row cb-custom-card mb-3">
			<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000a619d2b2b48549269abd/emb"></script>
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
