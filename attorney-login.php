<html lang="en">

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./img/index.ico" />
    <!-- Assets -->
    <!-- CDN Core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fa.all.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="./css/common.css" media="screen" title="no title" charset="utf-8" />
    <link rel="stylesheet" href="./css/jquery.datetimepicker.min.css" media="screen" title="no title"
        charset="utf-8" />
    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- CDN Core JS -->
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- CDN Extended JS -->
    <script src="./js/moment.min.js"></script>
    <script src="./js/moment-timezone-with-data.min.js"></script>
    <script src="./js/jquery.maskedinput.min.js"></script>
    <!-- Local JS -->
    <script src="./js/common.js" type="text/javascript"></script>
    <script src="./js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
    <script src="./js/lib/Inputmask-5.x/dist/jquery.inputmask.min.js"></script>
    <!-- ./Assets -->

	<title>MEO: Attorney Login</title>
	<style>
		section{
			width: 100% !important
		}
	</style>
</head>

<body>

	<div class="text-right row p-2" style="background-color: #fff">
		<div class="dropdown col-lg-12">
			<button class="btn btn-primary dropdown-toggle ml-2" style="width: fit-content" type="button" data-toggle="dropdown" aria-expanded="false">
				Attorney
			</button>
			LOGIN
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#" onclick="redirectLogin('owner')">Client</a>
				<a class="dropdown-item " href="#" onclick="redirectLogin('staff')">Staff</a>
				<a class="dropdown-item active" href="#" onclick="redirectLogin('attorney')">Attorney</a>
			</div>
		</div>
	</div>

	<main role="main" class="container-fluid col-lg-3 mt-rem-5">

		<div class="card">
			<div class="card-header" style="background-color: #D5DCF9; color: #677FE6">
				<div class="row">
					<div class="col-md-8 m-auto">
						<div class="row">
							<span class="h6 font-weight-bold">Welcome!</span>
						</div>
						<div class="row">
							Sign into the Maryland Evictions Online System
						</div>
					</div>
					<div class="col px-0 text-right">
						<img src="./img/logo_2.png" width="100px"/>
					</div>
				</div>
			</div>
			<div class="card-body text-center">
                <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080002785415a53434f609cd8/emb"></script>
				<hr>
				<a href="./attorney-reset-password.php"><i class="fas fa-lock mr-2"></i>forgot your password?</a>
			</div>
		</div>
	</main>
	<!-- /.container -->

</body>

</html>
