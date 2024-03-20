<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<title>Owner: Cases</title>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/owner-navbar.php';?>
    </div>

	<script>$('#nav-cases').addClass('active');</script>

	<main role="main" class="container-fluid cb-container-lg mb-5">

		<!-- Contents -->
		<nav class="mt-rem-5" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file"></i> Cases</li>
			</ol>
		</nav>

		<div class="cb-custom-card mb-3">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded0800050bbc8625bea4a5a8ed4/emb"></script>
				</div>
			</div>
		</div>

		<div class="cb-custom-card mb-3">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<button type="button" class="btn btn-primary mb-3" style="width: fit-content !important" onclick="openModal('Add Case','72ddbd34090c4bbfb924','')"><i class="fas fa-plus mr-2"></i>Add Case</button>
					<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080000bd836cb1714478d86ea/emb"></script>
				</div>
			</div>
		</div>

	</main><!-- /.container -->
	<div id="footer">
        <script>load_modal()</script>
    </div>
</body>

</html>
