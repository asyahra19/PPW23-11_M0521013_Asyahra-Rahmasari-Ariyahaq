<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="">
    <title>Penitipan Hewan Peliharaan</title>
    <style>
        header{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.1)), url(banner.jpg);
            background-size: cover;
            background-position: center;
            font-size: 20px;
        }

        h1{
            font-family: 'Courgette', cursive;
        }

        nav{
            background-color: #ffffff;
        }

        .navbar-header{
            color: #28b2c7;
        }

        nav ul li a{
            color: #28b2c7;
            margin: 0 10px;
            font-size: 15px;
            text-decoration: none;
        }

        .head-content{
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: #fbfbfb;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    Luxurious Pet Hotel Purupu
                </div>
                <ul class="nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('boarding.index') }}">Data</a></li>
                </ul>
            </div>
        </nav>
        <div class="head-content">
            <h1>Welcome to Luxurious Pet Hotel Purupu</h1>
            <p>ADMIN PAGE</p>
        </div>
    </header>    
</body>
</html>