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
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- /.container -->
    <script>
        
        document.addEventListener('DataPageReady', function (event) {
            if (event.detail.appKey == 'ded080001d68ca8f2130479fa701') {

                //get the active case count
                var caseCalc = document.querySelector("input[name='cbParamVirtual1']");
                caseCalc.addEventListener("change",
                    function(){
                        var caseCount = caseCalc.value;
                        document.querySelector("p[id='case-count']").innerHTML = caseCount;
                        console.log(caseCount);
                    }
                );

                //get the property count
                var propertCalc = document.querySelector("input[name='cbParamVirtual2']");
                propertCalc.addEventListener("change",
                    function(){
                        var propertyCount = propertCalc.value;
                        document.querySelector("p[id='property-count']").innerHTML = propertyCount;
                        console.log(propertyCount);
                    }
                );

                //get the tenant count
                var tenantCalc = document.querySelector("input[name='cbParamVirtual3']");
                tenantCalc.addEventListener("change",
                    function(){
                        var tenantCount = tenantCalc.value;
                        document.querySelector("p[id='tenant-count']").innerHTML = tenantCount;
                        console.log(tenantCount);
                    }
                );
            }
        });
        
    </script>
    <!-- <script>
        var counter = 0;

        document.addEventListener('DataPageReady', function (event) {
            $(window).resize(function () {
                var width = $(window).width();
                console.log(width)
                let myVar = setTimeout(function () {
                    $(".highcharts-plot-border").attr("stroke-width", 0)
                    // $(".highcharts-background").attr("stroke-width", 0)
                    $(".highcharts-axis-line").attr("stroke-width", 0)
                    $(".highcharts-tick").attr("stroke-width", 0)
                }, 500);
            });

            $(".highcharts-plot-border").attr("stroke-width", 0)
            // $(".highcharts-background").attr("stroke-width", 0)
            $(".highcharts-axis-line").attr("stroke-width", 0)
            $(".highcharts-tick").attr("stroke-width", 0)

            if (event.detail.appKey == 'cb26a0004b62df0e81084c58a4da') {
                counter++;
            } else if (event.detail.appKey == 'cb26a000259c26aaa33b431ca243') {
                counter++;
            } else if (event.detail.appKey == 'cb26a0005896d57e5e2741a09d2d') {
                counter++;
            } else if (event.detail.appKey == 'cb26a000cf78addf40d9420ba394') {
                counter++;
            } else if (event.detail.appKey == 'cb26a00089ce29fba4914a4bb1d5') {
                counter++;
            } else if (event.detail.appKey == 'cb26a000fcc08a4eefeb4782afed') {
                counter++;
            }
            // Load all DataPages then show
            if (counter === 5) {
                setTimeout(function () {
                    $('.cb-hide').each(function () {
                        $(this).css('opacity', '100');
                    });
                }, 500);
            }
        });
    </script> -->
</body>

</html>
