<?php

    session_start();

    if(isset($_SESSION['color'])){
        $color=$_SESSION['color'];
    }else{
        $color='#ffffff';
    }

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elegir color</title>
    </head>
    <body style='background-color: <?=$color?>;'>
        <h1>Elige tu color favorito</h1>

        <form action='guardarColor.php' method='post'>
            <input type='color' name='color' value='<?= $color?>'>
            <button type='submit'>Guardar</button>
        </form>

        <p><a href='pagina2.php'>Ir a la pagina siguiente 2</a></p>
        
    </body>
    </html>