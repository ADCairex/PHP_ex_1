<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <form action="ex15.php" method="get">
            <p>
                Dime una fecha.
            </p>
            <input type="date" name="data" id="data">
            <button type="submit">Enviar</button>
        </form>
        <?php
            if (isset($_GET['data'])) {
                $data = $_GET['data'];
                $data = explode("-", $data);
                echo date("l", mktime(0, 0, 0, $data[1], $data[2], $data[0]));
            }
        ?>
    </body>
</html>