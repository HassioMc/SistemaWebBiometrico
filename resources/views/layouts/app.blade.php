<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="complements/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="complements/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="complements/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="complements/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <!--===============================================================================================-->
    <script src="complements/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="complements/bootstrap/js/popper.js"></script>
    <script src="complements/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="complements/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="complements/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>
</html>