<html>
 <head>
  <title>
   TickTech
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
   body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Arial', sans-serif;
        }
        .background {
            background-image: url('https://images.unsplash.com/photo-1487537891204-8e3ba1a38082?q=80&w=1566&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            position: relative;
            color: white;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: rgba(0, 0, 0, 0.5);
        }
        .navbar .logo {
            display: flex;
            align-items: center;
        }
        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar .logo span {
            font-size: 20px;
            font-weight: bold;
        }
        .navbar .menu {
            display: flex;
            gap: 20px;
        }
        .navbar .menu a {
            color: gray;
            text-decoration: none;
            font-size: 16px;
        }
        .navbar .menu-icon {
            display: none;
            font-size: 24px;
        }
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-family: 'Playfair Display', serif;
        }
        .content h1 {
            font-size: 60px;
            margin: 0;
            color: white
        }
        .content h2 {
            font-size: 48px;
            margin: 0;
            color:croal
        }
        @media (max-width: 768px) {
            .navbar .menu {
                display: none;
            }
            .navbar .menu-icon {
                display: block;
            }
        }
  </style>
 </head>
 <body>
  <div class="background">
   <div class="navbar">
    <div class="logo">
     <img alt="Tickets Logo" height="40" src="https://static.vecteezy.com/system/resources/previews/035/009/150/non_2x/ticket-icon-transparent-background-png.png" width="40"/>
     <span>
      Estacionate con nosotros
     </span>
    </div>
    <div class="menu">
        <a href="<?= base_url('perfil'); ?>">Perfil</a>
        <a href="<?= base_url('pagar'); ?>">Pagar</a>
        <a href="<?= base_url('login'); ?>">Cerrar Sesión</a>
    </div>
    <div class="menu-icon">
     <i class="fas fa-bars">
     </i>
    </div>
   </div>
   <div class="content">
    <h1>
     TickTech
    </h1>
    <h2>
     Parking
    </h2>
   </div>
  </div>
 </body>
</html>