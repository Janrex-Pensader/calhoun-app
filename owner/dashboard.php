<!doctype html>
<html lang="en">

<head>
    <?php include '../partials/header.php';?>
    <title>Owner: Dashboard</title>
    <style>
        .dashboard-icon{
            font-size: 50px
        }
    </style>
</head>

<body>
    <!--navbar container -->
    <div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/owner-navbar.php';?>
    </div>

    <script>$('#nav-dashboard').addClass('active');</script>

    <main role="main" class="container-fluid cb-container-lg mb-5">

        <div class="row mt-rem-5">
            <div class="col-lg-4 px-1">
                <div class="row cb-custom-card mb-3">
                </div>
                <div class="row cb-custom-card">
                </div>
            </div>
            <div class="col px-1">
                <div class="row mb-3">
                    <div class="col cb-custom-card mx-1">
                        <div class="row">
                            <div class="col-sm-8">
                                <p class="h6">Active Cases</p>
                                <p id="case-count"class="h4 mb-0">0</p>
                            </div>
                            <div class="col text-center">
                                <i class="fas fa-file dashboard-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col cb-custom-card mx-1">
                        <div class="row">
                            <div class="col-sm-8">
                                <p class="h6">Properties</p>
                                <p id="property-count" class="h4 mb-0">0</p>
                            </div>
                            <div class="col text-center">
                                <i class="fas fa-home dashboard-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col cb-custom-card mx-1">
                    <div class="row">
                            <div class="col-sm-7">
                                <p class="h6">Tenants</p>
                                <p id="tenant-count" class="h4 mb-0">0</p>
                            </div>
                            <div class="col text-center">
                                <i class="fas fa-users dashboard-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col cb-custom-card mx-1">
                        <button type="button" class="btn btn-primary ml-auto w-fit-content" onclick="openModal('Add Case','72ddbd34090c4bbfb924','')"><i class="fas fa-plus mr-2"></i>Add Case</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- modal container -->
		<div id="footer">
            <script>load_modal()</script>
        </div>
    <!-- ./modal container -->

    <!-- /.container -->
    <script>
        
    </script>
</body>

</html>
