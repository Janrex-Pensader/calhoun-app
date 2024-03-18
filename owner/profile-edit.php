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
					<div class="cb-form-resp cb-form-fluid">
						<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080000d0ebbcb9d6f40f89f6b/emb"></script>
					</div>
				</div>
			</div>
		</div>

	</main><!-- /.container -->

	<div id="cb-modal" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="cb-modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="cb-modal-body"></div>
					<div id="cb-modal-error" class="d-none alert alert-danger"></div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
