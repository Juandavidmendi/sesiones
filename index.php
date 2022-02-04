<?php
    include_once 'includes/user.php';
    include_once 'includes/user_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <div id="main">
<?php

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "Hay sesión";
}else if(isset($_POST['username']) && isset($_POST['password'])){
    echo "Validacion de Login";
}else{
    echo "Login";
    include_once 'vistas';
    include_once
}


?>
</div>
</body>
</html>
