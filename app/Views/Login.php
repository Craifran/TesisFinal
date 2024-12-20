<html>
<head>
    <title>Login TickTech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            background: url('https://images.wallpaperscraft.com/image/single/parking_underground_marking_118795_1920x1080.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.5); /* Black with opacity */
            padding: 20px;
            border-radius: 10px;
        }
        .logo {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .logo i {
            margin-right: 10px;
        }
        .nav {
            margin-bottom: 20px;
        }
        .nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        .form-group input::placeholder {
            color: #ddd;
        }
        .btn {
            background: #b22222; 
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background: #8b0000; 
        }
        .options {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .options a {
            color: #fff;
            text-decoration: none;
        }
        .options a:hover {
            text-decoration: underline;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 5px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-ticket-alt"></i> TickTech
        </div>
        <div class="nav">
            <a href="<?php echo base_url('aboutus'); ?>" class="boton">Sobre Nosotros</a>
            <a href="<?php echo base_url('RetRes'); ?>" class="boton">Register</a>
        </div>
        <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>
        <form action="<?= base_url('sesionverify'); ?>" method="post">
            <div class="form-group">
                <input type="text" name="Email" id="email" placeholder="&#xf007;  Email" style="font-family: 'Font Awesome 5 Free', 'Roboto', sans-serif;" required>
            </div>
            <div class="form-group">
                <input type="password" name="Contraseña" id="password" placeholder="&#xf023;  Password" style="font-family: 'Font Awesome 5 Free', 'Roboto', sans-serif;" required>
            </div>
            <input type="submit" value="Ingresar">
        </form>
        <div class="footer">
            <p>&copy; 2024 TickTech. Todos Los Derechos Reservados</p>
        </div>
    </div>
</body>
</html>