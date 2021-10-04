<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <form action="ex14.php" method="get">
            <p>
                Dime una frase.
            </p>
            <input type="text" name="data" id="data ">
            <button type="submit">Enviar</button>
        </form>
        <?php
            if (isset($_GET['data'])) {
                $duplicated = array();
                $data = $_GET['data'];
                $data = str_split($data);
                foreach ($data as $i) {
                    if (array_key_exists($i, $duplicated)) {
                        $duplicated[$i] = $duplicated[$i] + 1;
                    } elseif (!(array_key_exists($i, $duplicated))) {
                        $duplicated[$i] = 1;
                    }
                }
                echo 'Estas son las letras que se repiten mas de 3 veces <br> " ';
                foreach ($duplicated as $key => $value) {
                    if ($duplicated[$key] >= 3) {
                        echo $key . ' ';
                    }
                } 
                echo '"';
            }
        ?>
    </body>
</html>