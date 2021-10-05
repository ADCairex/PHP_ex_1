<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <form action="ex15.php" method="get">
            <p>
                Dime dos fechas.
            </p>
            <input type="date" name="data1" id="data1">
            <input type="date" name="data2" id="data2">
            <button type="submit">Enviar</button>
        </form>
        <?php
            if (isset($_GET['data1']) && isset($_GET['data2'])) {
                $data1 = $_GET['data1'];
                $data2 = $_GET['data2'];
                $data1 = explode("-", $data1);
                $data2 = explode("-", $data2);

                $day1 = date("l", mktime(0, 0, 0, $data1[1], $data1[2], $data1[0]));
                $month1 = date("F", mktime(0, 0, 0, $data1[1], $data1[2], $data1[0]));

                $day2 = date("l", mktime(0, 0, 0, $data2[1], $data2[2], $data2[0]));
                $month2 = date("F", mktime(0, 0, 0, $data2[1], $data2[2], $data2[0]));


                // Translate the day to spanish of first date
                if ($day1 == 'Monday') {
                    $day1 = 'Lunes';
                } elseif ($day1 == 'Tuesday') {
                    $day1 = 'Martes';
                } elseif ($day1 == 'Wednesday') {
                    $day1 = 'Miercoles';
                } elseif ($day1 == 'Thursday') {
                    $day1 = 'Jueves';
                } elseif ($day1 == 'Friday') {
                    $day1 = 'Viernes';
                } elseif ($day1 == 'Saturday') {
                    $day1 = 'Sabado';
                } elseif ($day1 == 'Sunday') {
                    $day1 = 'Domingo';
                }

                // Translate the day to spanish of second date
                if ($day2 == 'Monday') {
                    $day2 = 'Lunes';
                } elseif ($day2 == 'Tuesday') {
                    $day2 = 'Martes';
                } elseif ($day2 == 'Wednesday') {
                    $day2 = 'Miercoles';
                } elseif ($day2 == 'Thursday') {
                    $day2 = 'Jueves';
                } elseif ($day2 == 'Friday') {
                    $day2 = 'Viernes';
                } elseif ($day2 == 'Saturday') {
                    $day2 = 'Sabado';
                } elseif ($day2 == 'Sunday') {
                    $day2 = 'Domingo';
                }

                // Translate the month to spanish first date
                if ($month1 == 'January') {
                    $month1 = 'Enero';
                } elseif ($month1 == 'February') {
                    $month1 = 'Febrero';
                } elseif ($month1 == 'March') {
                    $month1 = 'Marzo';
                } elseif ($month1 == 'April') {
                    $month1 = 'Abril';
                } elseif ($month1 == 'May') {
                    $month1 = 'Mayo';
                } elseif ($month1 == 'Jine') {
                    $month1 = 'Junio';
                } elseif ($month1 == 'July') {
                    $month1 = 'Julio';
                } elseif ($month1 == 'August') {
                    $month1 = 'Agosto';
                } elseif ($month1 == 'October') {
                    $month1 = 'Octubre';
                } elseif ($month1 == 'November') {
                    $month1 = 'Noviembre';
                } elseif ($month1 == 'December') {
                    $month1 = 'Diciembre';
                }

                // Translate the month to spanish of second date
                if ($month2 == 'January') {
                    $month2 = 'Enero';
                } elseif ($month2 == 'February') {
                    $month2 = 'Febrero';
                } elseif ($month2 == 'March') {
                    $month2 = 'Marzo';
                } elseif ($month2 == 'April') {
                    $month2 = 'Abril';
                } elseif ($month2 == 'May') {
                    $month2 = 'Mayo';
                } elseif ($month2 == 'Jine') {
                    $month2 = 'Junio';
                } elseif ($month2 == 'July') {
                    $month2 = 'Julio';
                } elseif ($month2 == 'August') {
                    $month2 = 'Agosto';
                } elseif ($month2 == 'October') {
                    $month2 = 'Octubre';
                } elseif ($month2 == 'November') {
                    $month2 = 'Noviembre';
                } elseif ($month2 == 'December') {
                    $month2 = 'Diciembre';
                }

                echo $data1[2] . '/' . $data1[1] . '/' . $data1[0] . '<br>';
                echo $day1 . ' ' . $data1[2] . ' de ' . $month1 . ' de ' . $data1[0] . '<br>';

                if ($data1[1] < $data2[1] || ($data1[1] == $data2[1] && $data1[2] < $data2[2]) || ($data1[0] < $data2[0])) {
                    echo 'La fecha 1 es mas antigua que la fecha 2 <br>';
                } else {
                    echo 'La fecha 1 es menos antigua que la fecha 2 <br>';
                } 

                $x = $data1[1] + 1;
                echo 'Fecha 1 sumandole un mes: ' . $data1[2] . '/' . $x . '/' . $data1[0] . '<br>';
            }
        ?>
    </body>
</html>
