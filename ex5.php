<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="ex5.php" method="POST">
            <input type="text" name="data" id="data">
            <input type="submit" value="Enviar">
            <?php
                if (isset($_POST['data'])) {
                    $data = ($_POST['data']);
                    
                    if ($data/2 == 'INF') {
                        echo 'no es un entero';
                    } elseif ($_POST['data']%2 == 0) {
                        echo $data . ' es par: los siguientes numeros son ';
                        echo $data + 2 . ' y ';
                        echo $data + 4;
                    } elseif ($_POST['data']%2 != 0) {
                        echo $data . ' es impar: los siguientes numeros son ';
                        echo $data + 2 . ' y ';
                        echo $data + 4;
                    }
                }
            ?>
        </form>
    </body>
</html>