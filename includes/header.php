
<!doctype html>
<html lang="es">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Tienda WEB APP" content="">
    <meta name="Santiago Perez" content="">
    <link rel="icon" href="../resources/images/flor.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>SaraShop WEB </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <style>
        .card img{
            height: 250px;
        }
        .btn-secondary{
            background-color: violet;
        }
        .btn-primary{
            background-color: #96A9B8;
        }

    </style>

    <script>
        function atras() {
            window.history.back();
        }
    </script>


</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="padding: 5px; background-color: white; height: 100px; ">
            <a class="navbar-brand" href="../../public/index.php">
                <img src="../../resources/images/Sara_logo.jpg" alt="" style="width: 140px; height: 80px; margin: -8%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="background-color: white;" id="navbarCollapse">
                <ul class="navbar-nav mr-auto" >
                    <li class="nav-item active">
                        <a class="nav-link" href="../../public/index.php" style="color: black;">MAIN <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: black;">SHOPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../app/Controllers/shop_controller.php" style="color: black;">CONTACT</a>
                    </li>
                </ul>

                    <p><a class="btn btn-lg btn-primary" href="" role="button" style="margin-left: 10px">LogIn</a></p>


            </div>
        </nav>
    </header>
