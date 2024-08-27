<!doctype html>
<html lang="en">

<head>
	<?php include '../partials/header.php';?>
	<link rel="stylesheet" href="../css/case-details.css" media="screen" title="no title" charset="utf-8" />
	<title>Staff: Cases</title>

	<style>
		.cb-container-lg{
			width: 1500px !important
		}

		/* input[name="Mod0EditRecord"] {
			display: none !important;
		} */

		.cbBackButtonContainer{
			display: none !important;
		}
	</style>
</head>

<body>

	<div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

	<script>
        $('#nav-cases').addClass('active');
    </script>

	<main role="main" class="container-fluid mb-5">

		<!-- Contents -->
		<nav class="mt-rem-5 mb-2 navbar cb-white-bg cb-border-rad navbar-expand-sm p-0">
            <ul id="case-nav-bar" class="navbar-nav">
                <li id="nav-case-details" class="nav-item">
                    <a class="nav-link" href="./case-details-1.php?"><i class="fas fa-tasks"></i> details</a>
                </li>
                <li id="nav-case-files" class="nav-item active">
                    <a class="nav-link" href="./case-files.php?"><i class="fas fa-file"></i> Files</a>
                </li>
                <li id="nav-case-users" class="nav-item">
                    <a class="nav-link" href="./case-users.php?"><i class="fas fa-users"></i> Tenants and Cotacts</a>
                </li>
            </ul>
        </nav>

		<div class="row">
			<div class="col cb-custom-card mr-2">
				<!-- Case Basic Info -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080007dadc86af30945168d50/emb"></script>
			</div>
			<div class="col-4 cb-custom-card">
				<!-- Case Status-->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded0800051b35e4bbb7b485d9e96/emb"></script>
			</div>
		</div>

		<div class="row">
			<div class="col cb-custom-card mt-2">
				<!-- Case Files -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded0800025c11ecd0e8f4faabe36/emb"></script>
				<!-- Property files Read Only -->
				<script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded08000c29332bb889e44bb81ea/emb"></script>
			</div>
		</div>

	</main><!-- /.container -->
	<div id="footer" class="mb-5">
        <script>
			load_modal();

			$("#btn-submit-all").removeClass("hide-this");
            
            document.getElementById('nav-case-details').querySelector('a').href = './case-details.php'+ window.location.search;
            document.getElementById('nav-case-files').querySelector('a').href = './case-files.php'+ window.location.search
            document.getElementById('nav-case-users').querySelector('a').href = './case-users.php'+ window.location.search

			document.addEventListener('DataPageReady', function (event) {
				$('input[name*=Phone]').inputmask({mask: '(999)-999-9999', showMaskOnHover: false, placeholder: 'x'});
			});

			const parentOfELement = document.body;
			const onMutation = () => {
				if (parentOfELement.querySelector("input[name*='InlineEditPhone']")) {
					observer.disconnect();
					console.log('test');
					$('input[name*=Phone]').inputmask({mask: '(999)-999-9999', showMaskOnHover: false, placeholder: 'x'});
				}
			}
		</script>
    </div>
</body>
</html>

