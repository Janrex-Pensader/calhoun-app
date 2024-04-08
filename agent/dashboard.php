<!doctype html>
<html lang="en">

<head>
    <?php include '../partials/header.php';?>
    <title>Agent: Dashboard</title>
    <style>
        .dashboard-icon{
            font-size: 50px
        }
    </style>
</head>

<body>
    <!--navbar container -->
    <div class="navbar-expand-lg navbar-light bg-light fixed-top" id="site-navbar">
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
                                <p class="h4 mb-0">3000</p>
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
                                <p class="h4 mb-0">3000</p>
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
                                <p class="h4 mb-0">3000</p>
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
