<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brinary Bridge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            color: white;
            background-color: #0d0d2b;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #0d0d2b;
        }
        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .navbar .nav-links {
            display: flex;
            gap: 30px;
        }
        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }
        .navbar .buttons {
            display: flex;
            gap: 15px;
        }
        .navbar .buttons a {
            padding: 10px 20px;
            border: 2px solid white;
            border-radius: 25px;
            text-decoration: none;
            color: white;
            font-size: 16px;
        }
        .navbar .buttons a.contact {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }
        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px);
            text-align: center;
            background: url('https://wallpapermemory.com/uploads/456/circuit-wallpaper-1080p-89586.jpg')
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 48px;
            font-weight: bold;
            max-width: 800px;
            line-height: 1.2;
            z-index: 1;
            opacity: 0.9;
        }
        .hero img {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
            z-index: 1;
        }
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 20px;
            }
            .navbar .nav-links {
                flex-direction: column;
                gap: 15px;
            }
            .navbar .buttons {
                flex-direction: column;
                gap: 10px;
            }
            .hero h1 {
                font-size: 32px;
                padding: 0 20px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Binary Bridge</div>
        <div class="nav-links">
            <a href="Login.php">Capellino</a>
            <a href="#">TickTech</a>
            <a href="#">By: Binary Bridge</a>
            <a href="#">Ariza</a>
        </div>
        <div class="buttons">
        </div>
    </div>
    <div class="hero">
        <h1>Somos Brinary Bridge, una empresa que se dedica a solucionar problemas informáticos a través del hardware y el software.</h1>
    </div>
</body>
</html>