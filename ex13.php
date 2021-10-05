<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ex 12</title>
    </head>
    <body>
        <form action="ex13.php" method="get">
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

                    function sum($x, $y) {
                        $result = $x + $y;
                        return $result;
                    }

                    function res($x, $y) {
                        $result = $x - $y;
                        return $result;
                    }

                    function mult($x, $y) {
                        $result = $x * $y;
                        return $result;
                    }

                    function div($x, $y) {
                        $result = $x / $y;
                        return $result;
                    }

                    function fact($x) {
                        for ($i = 1; $i <= $x; $i++) {
                            $result = $result * $x;
                        }
                        return $result;
                    }

                    function calculator($x, $y, $operator) {
                        if ($operator == '+') {
                            return 'La suma de ' . $x . ' y ' . $y . ' es ' . sum($x, $y);
                        } elseif ($operator == '-') {
                            return 'La resta de ' . $x . ' y ' . $y . ' es ' . res($x, $y);
                        } elseif ($operator == '*') {
                            return 'La multiplicacion de ' . $x . ' y ' . $y . ' es ' . mult($x, $y);
                        } elseif ($operator == '/') {
                            return 'La division de ' . $x . ' y ' . $y . ' es ' . div($x, $y);
                        } elseif ($operator == 'fact') {                            
                            return 'La suma de ' . $x . ' y es ' . fact($x);
                        }
                    }

                    echo calculator($num1, $num2, $operation);
                }
            ?>
        </form>
    </body>
</html>
