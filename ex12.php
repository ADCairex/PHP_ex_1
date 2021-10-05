<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ex 12</title>
    </head>
    <body>
        <form action="ex12.php" method="get">
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
                    $operation = $_GET['operation'];
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];

                    $result = 1;

                    function sum ($x, $y) {
                        $result = $x + $y;
                        return $result;
                    }

                    function res ($x, $y) {
                        $result = $x - $y;
                        return $result;
                    }

                    function mult ($x, $y) {
                        $result = $x * $y;
                        return $result;
                    }

                    function div ($x, $y) {
                        $result = $x / $y;
                        return $result;
                    }

                    function fact ($x) {
                        for ($i = 1; $i <= $x; $i++) {
                            $result = $result * $x;
                        }
                        return $result;
                    }

                    if ($operation == '+') {
                        echo 'La suma de ' . $num1 . ' y ' . $num2 . ' es ' . sum($num1, $num2);
                    } elseif ($operation == '-') {
                        $result = $num1 - $num2;
                        echo 'La resta de ' . $num1 . ' y ' . $num2 . ' es ' . res($num1, $num2);
                    } elseif ($operation == '*') {
                        $result = $num1 * $num2;
                        echo 'La multiplicacion de ' . $num1 . ' y ' . $num2 . ' es ' . mult($num, $num2);
                    } elseif ($operation == '/') {
                        $result = $num1 / $num2;
                        echo 'La division de ' . $num1 . ' y ' . $num2 . ' es ' . div($num1, $num2);
                    } elseif ($operation == 'fact') {
                        
                        echo 'La suma de ' . $num1 . ' y ' . $num2 . ' es ' . fact($num1);
                    }
                }
            ?>
        </form>
    </body>
</html>
