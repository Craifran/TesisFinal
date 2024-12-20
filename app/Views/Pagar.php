<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <style>
        /* Add some basic styling to make the page look more professional */
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://wallpapercave.com/wp/wp8106568.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        /* Create a container for the payment form */
        .payment-container {
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 5px solid; 
            border-radius: 10px;
            border-color: #660000; 
            animation: border-color 3s infinite;
        }
        
        /* Define the animation for the border color */
        @keyframes border-color {
            0% { border-width: 5px; border-color: rgb(100, 0, 0); }
            10% { border-width: 5px; border-color: rgb(110, 0, 0); }
            20% { border-width: 5px; border-color: rgb(120, 0, 0); }
            30% { border-width: 5px; border-color: rgb(130, 0, 0); }
            40% { border-width: 5px; border-color: rgb(140, 0, 0); }
            50% { border-width: 5px; border-color: rgb(150, 0, 0); }
            60% { border-width: 5px; border-color: rgb(160, 0, 0); }
            70% { border-width: 5px; border-color: rgb(170, 0, 0); }
            80% { border-width: 5px; border-color: rgb(180, 0, 0); }
            90% { border-width: 5px; border-color: rgb(190, 0, 0); }
            100% { border-width: 5px; border-color: rgb(100, 0, 0); }
        }       
        /* Style the PayPal button container */
        #paypal-button-container {
            text-align: center;
            margin-top: 20px;
        }

        /*Botón pagar en efectivo*/
        .payment-container {
            text-align: center;
            color: #000;
            padding: 20px;
            border: 2px solid #d32f2f;
            border-radius: 10px;
            background-color: #fff;
        }

        .cash-payment-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #ffc107; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        .cash-payment-button:hover {
            background-color: #ffb300; 
            transform: scale(1.05);
        }

        .cash-payment-button:active {
            background-color: #ffa000;
            transform: scale(1);
        }

        #image_qr {
            display: none; 
            position: center;
        }
        .btncmp {
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btncmp-yellow {
            background-color: #ffc107; /* Color amarillo */
            color: #fff; /* Texto blanco */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btncmp-yellow:hover {
            transform: scale(1.05); /* Animación al pasar el cursor */
            box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.3);
        }

    </style>

    <!-- SDK de Pay Pal -->
    <script src ="https://www.paypal.com/sdk/js?client-id=AYS-DGtG_Ju4ielnRgzkKNo8AAzGtcjfIkNKDGxpOTE1Z2NUOHoIptl4L-KaYJrxWjUjGC8ldzxjl9td&currency=USD"></script>
</head>
<body>
    <div class="payment-container">
        <h2>Pago en Efectivo</h2>
        <button class="cash-payment-button" onclick="showQRCode()">Pagar en Efectivo</button>
        <div id="image_qr">
            <?php if (!empty($qrCode) && isset($qrCode[0]['QR'])): ?>
                <img src="<?= base_url('imagenes/' . esc($qrCode[0]['QR'])) ?>" alt="QR Code">
            <?php else: ?>
                <p>No QR code image found.</p>
            <?php endif; ?>
        </div>
        <input type="button" value="Ver Comprobante" class="btncmp" onclick="window.location.href='comprobante';">
    </div>

    <!-- Create a container for the payment form -->
    <div class="payment-container">
        <h2>Pago con PayPal</h2>
        <p>Por favor, seleccione la opción de pago a continuación:</p>

        <!-- Formulario para ingresar el SlotCode -->
        <form id="slotCodeForm" action="<?= base_url('pagar/validarSlotCode') ?>" method="post">
    <label for="slotCode">Ingrese el SlotCode:</label>
    <input type="text" id="slotCode" name="slotCode" required>
    <input type="submit" value="Enviar" class="btncmp-yellow">
</form>


       <!-- Contenedor del botón de PayPal -->
<div id="paypal-button-container"></div>

<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: <?= $monto; ?> // El monto dinámico obtenido del controlador
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Pago completado por ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container');
</script>

    </div>

    <!--Botón para volver al menú-->
    <form action="<?= base_url('menu'); ?>" method="post"></form>
    <input type="button" value="Volver al Menú" class="btn" onclick="window.location.href='menu';">
</body>
</html>