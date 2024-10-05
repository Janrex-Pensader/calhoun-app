<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./img/index.ico" />

    <!-- CDN CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Local CSS -->
    <link rel="stylesheet" href="./css/common.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/all.css" media="screen" title="no title" charset="utf-8">

    <!-- CDN Core JS -->
    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- <script defer src="//use.fontawesome.com/releases/v5.0.6/js/all.js"></script> -->
    <script src="../js/all.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Local JS -->
    <script src="./js/common.js" type='text/javascript'></script>


    <title>Caspio App: PDF Viewer</title>
</head>

<body>

    <main role="main" class="container" style="padding-top:15px;">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Sample Login:</strong> caspio@test.com / Caspio123

            <div class="float-right lo d-none"><a href="https://c5ffn053.caspio.com/folderlogout">Logout</a></div>
        </div>

        <div class="cb-form-resp cb-form-fluid">

            <h4>PDF Viewer</h4>
            <script type="text/javascript" src="https://c5ffn053.caspio.com/dp/831c5000148ce834fb684fdb8fc9/emb"></script>
        </div>
    </main><!-- /.container -->

    <script>
        document.addEventListener('DataPageReady', function(event) {
            
            var len = document.querySelectorAll('.cbFormAuthLabelCell').length;
            if( len == 0) {
                document.querySelector('.lo').classList.remove('d-none');
            }

        });
    </script>

</body>

</html>