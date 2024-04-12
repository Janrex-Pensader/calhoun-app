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

    <main role="main" class="container-fluid mb-5 w-80">

        <div class="row mt-rem-5">

            <div class="col-lg-5 px-0">
                <div class="row cb-custom-card mb-3 p-0">
                    <img src="../img/dashboard.png" class="w-100 card-img" style="border-radius: 3px">
                    <div class="card-img-overlay">
                        Welcome back!
                    </div>
                </div>
                <div class="row cb-custom-card">
                    <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080003efe09061e65453aac8e/emb"></script>
                </div>
            </div>

            <div class="col pl-3">
                <div class="row mb-3"> 
                    <div class="col cb-custom-card p-0">
                        <a class="text-decoration-none cb-btn-filter" href="./cases.php?Case_Status_ID=1">
                            <div class="h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h5">Active Cases</span>
                                    <div id="case-count" class="h1 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0 mx-3">
                        <a class="text-decoration-none cb-btn-filter" href="./properties.php?Status_ID=1">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h5">Properties</span>
                                    <div id="property-count" class="h1 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col cb-custom-card p-0">
                        <a class="text-decoration-none cb-btn-filter" href="./tenants.php?Tenant_Status=1">
                            <div class=" h-100">
                                <div class="card-body d-flex flex-column">
                                    <span class="card-title h5">Tenants</span>
                                    <div id="tenant-count" class="h1 mb-0 mt-auto">0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row cb-custom-card mb-3"> 
                    <button type="button" class="btn btn-primary w-fit-content ml-auto" onclick="openModal('Add Case','72ddbd34090c4bbfb924','?Case_Type_ID=1','modal-md')"><i class="fas fa-plus mr-2"></i>Add Case</button>
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
