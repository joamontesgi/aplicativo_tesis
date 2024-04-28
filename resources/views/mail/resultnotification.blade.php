<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Disponibles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #f8f9fa; font-family: Arial, sans-serif; margin: 0; padding: 0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
    <tr>
        <td bgcolor="#ffffff" style="padding: 40px; text-align: center;">
            <h2 style="color: #3b3c3c; margin-top: 0;">Resultados Disponibles</h2>
            <p style="margin: 20px 0;">Hola, te informamos que ya se han generado los resultados de la trama de datos. Por favor, revisa la página para más detalles.</p>
            <a href="{{ url('/index') }}" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; border-radius: 5px;">Ver Resultados</a>
            <div style="margin: 20px 0;">
                <img src="{{ asset('images/unal.png') }}" alt="UNAL" style="width: 100px; height: 100px; margin-right: 10px;">
                <img src="{{ asset('images/uCaldas.png') }}" alt="UCaldas" style="width: 100px; height: 100px; margin-left: 10px;">
            </div>
        </td>
    </tr>
    <tr>
        <td bgcolor="#3b3c3c" style="padding: 20px; text-align: center; color: white;">
            <p style="margin: 0;">&copy; {{ date('Y') }} Derechos Reservados</p>
        </td>
    </tr>
</table>

</body>
</html>
