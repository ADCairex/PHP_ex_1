<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ex 11</title>
    </head>
    <body>
        <form action="ex11.php" method="get">
            <p>Numero 1</p>
            <input type="text" name="num1" id="num1">
            <p>Operacion: (+, -, *, /, fact)</p>
            <input type="text" name="operation" id="operation">
            <p>Numero 2</p>
            <input type="text" name="num2" id="num2">
            <button type="submit" name="send">Enviar</button>
            <br>
            <?php
                if (isset($_GET['send'])) {
                    try {
                        $operation = $_GET['operation'];
                        $num1 = $_GET['num1'];
                        $num2 = $_GET['num2'];
                    } finally {
                        
                    }
                        $result = 1;
                    if ($operation == '+') {
                        $result = $num1 + $num2;
                        echo 'La suma de ' . $num1 . ' y ' . $num2 . ' es ' . $result;
                    } elseif ($operation == '-') {
                        $result = $num1 - $num2;
                        echo 'La resta de ' . $num1 . ' y ' . $num2 . ' es ' . $result;
                    } elseif ($operation == '*') {
                        $result = $num1 * $num2;
                        echo 'La multiplicacion de ' . $num1 . ' y ' . $num2 . ' es ' . $result;
                    } elseif ($operation == '/') {
                        $result = $num1 / $num2;
                        echo 'La division de ' . $num1 . ' y ' . $num2 . ' es ' . $result;
                    } elseif ($operation == 'fact') {
                        for ($i = 1; $i <= $num1; $i++) {
                            $result = $result * $num1;
                        }
                        echo 'La suma de ' . $num1 . ' y ' . $num2 . ' es ' . $result;
                    }
                }
            ?>
        </form>
    </body>
</html>