<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>TickTech</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8B0A1A, #660000, #4C0000, #330000);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 800px;
            display: flex;
            padding: 20px;
        }
        .form-container {
            flex: 1;
            padding: 20px;
        }
        .form-container h2 {
            font-family: 'Didot', serif;
            font-size:  24px;
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #8B0A1A;
            color: #fff;
            font-family: 'Ubuntu', sans-serif;
        }
        .signup-btn {
            background-color: #8B0A1b; 
            color: #fff;
            font-family: 'Ubuntu', sans-serif;
        }
        .header {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 20px;
        }
        .header a {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
        }
        .header a:hover {
            text-decoration: underline;
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="logo">
        <span style="font-family: 'Montserrat', sans-serif; font-size: 30px; font-weight: bold;">TickTech</span>
    </div>
    <div class="header"></div>
    <div class="container">
        <div class="form-container">
            <h2>Registrate</h2>
            <form action="register" method="post">
                <div class="form-group">
                    <label for="Nombre">Username:</label>
                    <input type="text" id="Nombre" name="Nombre" required><br><br>

                    <label for="Contraseña">Password:</label>
                    <input type="password" id="Contraseña" name="Contraseña" required><br><br>

                    <label for="Email">Mail:</label>
                    <input type="email" id="Email" name="Email" required><br><br>

                    <input type="submit" value="Register" class="signup-btn">
                    <p>¿Ya tienes una cuenta? <a href="index">Inicia sesión</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>