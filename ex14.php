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
                $duplicated_letter = array();
                $data = $_GET['data'];
                $array_big_word = explode(' ', $data);
                $data_letter = str_split($data);
                foreach ($data_letter as $i) {
                    if (array_key_exists($i, $duplicated_letter)) {
                        $duplicated_letter[$i] = $duplicated_letter[$i] + 1;
                    } elseif (!(array_key_exists($i, $duplicated_letter))) {
                        $duplicated_letter[$i] = 1;
                    }
                }
                echo 'Estas son las letras que se repiten mas de 3 veces <br> " ';
                foreach ($duplicated_letter as $key => $value) {
                    if ($duplicated_letter[$key] >= 3) {
                        echo $key . ' ';
                    }
                } 
                echo '"';
            }
        ?>
    </body>
</html>
