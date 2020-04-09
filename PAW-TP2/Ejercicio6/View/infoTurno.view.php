<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información del turno</title>
</head>
<body>
    <nav><?php include 'navbar.view.php' ?></nav>

    <p><?= $view_message ?></p>

    <h3>Informacion del turno</h3>
    
    <p>Nombre: <?= $fullname?></p>
    <p>Email: <?= $email?></p>
    <p>Telefono: <?= $tel?></p>
    <p>Edad: <?= $age?></p>
    <p>Talla calzado: <?= $shoe_size?></p>
    <p>Altura: <?= $height?></p>
    <p>Fecha de nacimiento: <?= $birthdate?></p>
    <p>Color de pelo: <?= $hair_color?></p>
    <p>Fecha del turno: <?= $appt_date?></p>
    <p>Hora del turno: <?= date("H:i", $appt_time) ?></p>


</body>
</html>