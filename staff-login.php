<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="./img/index.ico" />

	<!-- CDN CSS -->
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
		integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.13/css/all.css"
		integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Local CSS -->
	<link rel="stylesheet" href="css/common.css" media="screen" title="no title" charset="utf-8">

	<!-- CDN Core JS -->
	<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
		crossorigin="anonymous"></script>

	<!-- Local JS -->
	<script src="js/common.js" type='text/javascript'></script>

	<title>MEO: Staff Login</title>
	<style>
		section{
			width: 100% !important
		}
	</style>
</head>

<body>
	<div class="text-right row p-2" style="background-color: #fff">
		<div class="col-lg-12" >
			ARE YOU LOOKING FOR 
			<button type="button" class="btn btn-outline-primary mx-2" onclick="redirectLogin('owner')" style="width: fit-content;">Owner Login</button>
			OR
			<button type="button" class="btn btn-outline-primary mx-2 active" onclick="redirectLogin('staff')" style="width: fit-content;">Staff Login</button>
			OR
			<button type="button" class="btn btn-outline-primary mx-2" onclick="redirectLogin('attorney')" style="width: fit-content;">Attorney Login</button>
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
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000cb1968831e994bd1a172/emb"></script>
				<hr>
				<a href="./reset-password.php?r=staff"><i class="fas fa-lock mr-2"></i>forgot your password?</a>
			</div>
		</div>
	</main>
	<!-- /.container -->

</body>

</html>
