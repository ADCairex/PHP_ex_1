<?php
    $data = file_get_contents('definir_json.json');
    $data = json_decode($data, true);

    $actual_date = getdate();

    $juniors = array();
    $masters = array();
    $seniors = array();

    function calculateAge($date) {
        global $actual_date;
        $date = explode('-', $date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];
        $edad = $actual_date['year'] -  $year;
        if ($month > $actual_date['mon'] || ($month = $actual_date['mon'] && $day > $actual_date['mday'])) {
            $edad = $edad - 1;
        }
        return $edad;
    }

    foreach ($data as $i) {
        if (calculateAge(($i['fecha_nacimiento'])) < 20) {
            array_push($juniors, $i);
        } elseif (calculateAge(($i['fecha_nacimiento'])) >= 20 && calculateAge(($i['fecha_nacimiento'])) < 40) {
            array_push($masters, $i);            
        } else {
            array_push($seniors, $i);
        }
    }

    echo '<table>';
        echo '<tr>';
            echo '<th colspan="2">';
                echo 'Juniors';
            echo '<th>';
        echo '</tr>';
        foreach ($juniors as $value) {
            echo '<tr>';
                echo '<td>';
                    echo $value['nombre'];
                echo '</td>';
                echo '<td>'; 
                    echo calculateAge(($value['fecha_nacimiento']));
                echo '</td>';
            echo '</tr>';
        }
    echo '</table';

    echo '<table>';
        echo '<tr>';
            echo '<th colspan="2">';
                echo 'Masters';
            echo '<th>';
        echo '</tr>';
        foreach ($masters as $value) {
            echo '<tr>';
                echo '<td>';
                    echo $value['nombre'];
                echo '</td>';
                echo '<td>'; 
                    echo calculateAge(($value['fecha_nacimiento']));
                echo '</td>';
            echo '</tr>';
        }
    echo '</table';

    echo '<table>';
        echo '<tr>';
            echo '<th colspan="2">';
                echo 'Seniors';
            echo '<th>';
        echo '</tr>';
        foreach ($seniors as $value) {
            echo '<tr>';
                echo '<td>';
                    echo $value['nombre'];
                echo '</td>';
                echo '<td>'; 
                    echo calculateAge(($value['fecha_nacimiento']));
                echo '</td>';
            echo '</tr>';
        }
    echo '</table';
?>