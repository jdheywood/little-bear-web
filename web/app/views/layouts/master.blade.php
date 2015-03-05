<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Remove once content finalised, and then get google to crawl via analytics/webmaster tools-->
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <title>{{{ isset($pageTitle) ? $pageTitle . ' | ' : '' }}}Little Bear Production Ltd.</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Main -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar-wrapper">
        <div class="container">
            @include('navigation.main', array('navigationActive' => $navigationActive))
        </div>
    </div>

    @section('pageTitle')
    @show

    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>

    @include('shared.analytics')
</body>
</html>