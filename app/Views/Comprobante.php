<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de Pago</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('imagenes/photo-1506521781263-d8422e82f27a.jpg');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        h1, p {
            text-align: center;
        }
        .btn {
         font-size: 16px;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
          cursor: pointer;
         font-weight: bold;
        }

        .btn-yellow {
            background-color: #ffc107; /* Color amarillo */
            color: #fff; /* Texto blanco */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-yellow:hover {
            transform: scale(1.05); /* Animación al pasar el cursor */
            box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>
<body>
<input type="button" value="Atras" class="btn" onclick="window.location.href='pagar';">
<div style="display: table; width: 100%; text-align: center;">
    <div style="display: table-cell; text-align: center;">
        <h1>Comprobante de Pago</h1>
        <table style="margin: 0 auto; text-align: center;">
            <tr>
                <th><?php echo "Usuario: " . esc($userName); ?></th>
            </tr>
            <tr>
                <th><?php echo "Precio Total: " . esc($qrCode[0]['Precio_Total']); ?></th>
            </tr>
            <tr>
                <td><img src="<?= base_url('imagenes/Entrada/' . esc($qrCode[0]['Foto_Entrada'])) ?>" alt="Entrada"></td>
            </tr>
            <tr>
                <td><img src="<?= base_url('imagenes/Salida/' . esc($qrCode[0]['Foto_Salida'])) ?>" alt="Salida"></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
