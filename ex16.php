<?php
    $data = "29,35,83,98,38,32,95,59,54,65,50,11,13,1,10,84,20,3,65,62";
    $data = explode(',', $data);  
    $ordenated_data = $data; 

    function ordenar(&$x) {
        sort($x);
    }

    function addNum(&$x) {
        for ($i = 0; $i < 10; $i++) {
            $num = random_int(1, 100);
            $data = array_push($x, $num);
        }
    }
    echo 'Array sin ordenar: [';
    foreach ($data as &$i) {
        echo  $i . ',';
    }
    echo ']';

    echo '<br>';
    ordenar($ordenated_data);
    echo 'Array ordenado: [';
    foreach ($ordenated_data as &$i) {
        echo $i . ',';
    }
    echo ']';

    echo '<br>';

    addNum($data);
    $ordenated_data = $data;

    echo 'Array sin ordenar con 10 numeros mas: [';
    foreach ($data as &$i) {
        echo $i . ',';
    }
    echo ']';

    echo '<br>';
    ordenar($data);
        $ordenated_data = $data;

    echo 'Array ordenado con 10 numeros mas: [';
    foreach ($ordenated_data as &$i) {
        echo $i . ',';
    } 
    echo ']';
?>
