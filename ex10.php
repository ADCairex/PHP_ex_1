
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="data">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if (isset($_POST['data'])) {
                $data = ($_POST['data']);
                
                include 'definir_array.php';

                if (in_array($data, $theArray)) {
                    echo 'Esta en el array';
                } else {
                    echo 'No esta en el array';
                }
            }
        ?>
    </body>
</html>
