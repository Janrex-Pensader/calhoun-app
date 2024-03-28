<!doctype html>
<html lang="en">

<head>
    <?php include '../partials/header.php';?>
    <title>Staff: Dashboard</title>
    <style>
        .dashboard-icon{
            font-size: 50px
        }
    </style>
</head>

<body>
    <!--navbar container -->
    <div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
        <?php include '../partials/staff-navbar.php';?>
    </div>

    <script>$('#nav-dashboard').addClass('active');</script>

    <main role="main" class="container-fluid mb-5 w-80">

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

                <div class="row mb-3">
                    <div class="col cb-custom-card mx-1">
                        <div class="row">
                            <div class="col-sm-8">
                                <p class="h6">Failure to Pay Cases</p>
                                <p id="ftp-count"class="h4 mb-0">0</p>
                            </div>
                            <div class="col text-center">
                                <i class="fas fa-file dashboard-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col cb-custom-card mx-1">
                        <div class="row">
                            <div class="col-sm-8">
                                <p class="h6">Wrongful Detainers Cases</p>
                                <p id="wdc-count" class="h4 mb-0">0</p>
                            </div>
                            <div class="col text-center">
                                <i class="fas fa-home dashboard-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col cb-custom-card mx-1">
                    <div class="row">
                            <div class="col-sm-7">
                                <p class="h6">Breach of Leases Cases</p>
                                <p id="bol-count" class="h4 mb-0">0</p>
                            </div>
                            <div class="col text-center">
                                <i class="fas fa-users dashboard-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col cb-custom-card mx-1">

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

</body>

</html>
