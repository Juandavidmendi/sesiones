<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div id="menu">
        <li>Home</li>
        <li class="cerrar-sesion">
            <a href="includes/logout.php">Cerrar sesion</a>
        </li>
    </div>
    <section>
        <h1>Bienvenido <?php echo $user->getNombre();?></h1>
    </section>
</body>
</html>