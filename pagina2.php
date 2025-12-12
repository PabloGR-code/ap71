<?php

    session_start()

    if(isset($_SESSION['color'])){
        $color=$_SESSION['color'];
    }else{
        $color='#ffffff'
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body style='background-color: <?=$color?>;'>
    <h1>Esta es la pagina 2</h1>
    <p><a href='index.php'>Volver a la pagina principal</a></p> 
</body>
</html>