<!doctype html>
<html lang="en">

<head>
    <?php include '../partials/header.php';?>
    <title>Staff: Dashboard</title>
    <style>
        .dashboard-icon{
            font-size: 50px
        }

        form[action*='ded080003efe09061e65453aac8e'] a{
            font-size: 12px !important;
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

            <div class="col-lg-7 px-0">
                <div class="row cb-custom-card mb-3 p-0">
                    <img src="../img/dashboard.png" class="w-100 card-img" style="border-radius: 3px">
                    <div class="card-img-overlay">
                        Welcome back!
                    </div>
                </div>
                <div class="row cb-custom-card p-0">
                    <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080003efe09061e65453aac8e/emb"></script>
                </div>
            </div>

            <div class="col pl-3">
                <div class="row mb-3"> 
                    <div class="col cb-custom-card p-0">
                        <a class="text-decoration-none cb-btn-filter" href="./cases.php?Case_Stage_ID=19">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Pending Cases</span>
                                    <div id="pc-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0 mx-3">
                        <a class="text-decoration-none cb-btn-filter" href="./cases.php?Case_Status_ID=1">
                            <div class="h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Active Cases</span>
                                    <div id="case-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0">
                        <a class="text-decoration-none cb-btn-filter" href="./properties.php?Property_Status=1">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Properties</span>
                                    <div id="property-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-3"> 
                    <div class="col cb-custom-card p-0">
                        <a class="text-decoration-none cb-btn-filter" href="./tenants.php?Tenant_Status=1">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Upcoming Court Hearings</span>
                                    <div id="UCH-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0 mx-3">
                        <a class="text-decoration-none cb-btn-filter" href="./cases.php?Case_Type_ID=1">
                            <div class="h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Failure to Pay</span>
                                    <div id="ftp-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0 ">
                        <a class="text-decoration-none cb-btn-filter" href="./cases.php?Case_Type_ID=3">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Wronful Detainers</span>
                                    <div id="wd-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col cb-custom-card p-0">
                        <a class="text-decoration-none cb-btn-filter" href="./cases.php?Case_Type_ID=4">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Breach of leases</span>
                                    <div id="bol-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0 mx-3">
                        <a class="text-decoration-none cb-btn-filter" href="./eviction-summary-report.php">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Upcoming Eviction</span>
                                    <div id="pe-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0">
                        <a class="text-decoration-none cb-btn-filter" href="./cases.php?Case_Type_ID=2">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h6">Tenant Holding Over</span>
                                    <div id="tho-count" class="h3 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
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
