<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TickTech</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-image: url('https://thumbs.dreamstime.com/b/sunrise-sunset-parking-lot-winter-cars-parked-golden-trees-no-leaves-background-143715375.jpg');
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.formulario {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
}

.input-text {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    background-color: #FAA900;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px;
}

.btn:hover {
    background-color: #ffb300; 
    transform: scale(1.05);
}
    </style>

<form action="<?= site_url('perfil/update'); ?>" method="POST" class="formulario">
    <label for="nombre">Editar Nombre:</label>
    <input type="text" name="nombre" class="input-text" required><br>

    <label for="email">Editar E-Mail:</label>
    <input type="email" name="email" class="input-text" required><br>

    <label for="password">Editar Contraseña:</label>
    <input type="password" name="password" class="input-text" required><br>

    <label for="password">Editar Patente:</label>
    <input type="patente" name="patente" class="input-text" required><br>

    <?php
    $session = session();
    ?>

    <input type="hidden" name="id" class="input-text" value="<?= esc($session->get('ID_Usuario')) ?>" required><br>

    <input type="submit" value="Registrar" class="btn">
    <input type="button" value="Volver al Menú" class="btn" onclick="window.location.href='menu';">
</form>
</body>
</html>