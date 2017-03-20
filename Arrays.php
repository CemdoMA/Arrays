<?php

$numbers = array('2','4','6','1','3','5');

$result = count($numbers);

echo 'Aantal getallen: ' . $result . '<br>';

    for ($i = 0;$i<$result;$i++) {
        echo '<br>' . $numbers[$i];
    }

echo '<br>-----------------------';

    echo '<br>Aantal getallen: ' . $result . '<br>';
    $numbers[5] = 8;
    for ($i = 0;$i<$result;$i++){
        echo '<br>' . $numbers[$i];
    }

echo '<br>------------';

    array_push($numbers, '9', '7');
    $result = count($numbers);
    echo '<br>Aantal getallen: ' . $result . '<br>';
    for ($i = 0;$i<$result;$i++) {
        echo '<br>' . $numbers[$i];
    }
echo '<br>------------';

$mixed = array('4','januari','jebruari','12','maart','11','april');
$resultMixed = count($mixed);
    echo '<br>Aantal: ' . $result . '<br>';


    for ($i = 0;$i<$resultMixed;$i++){
        echo '<br>' . $mixed[$i];
    }
echo '<br>------------';

    echo '<br>Aantal: ' . $result . '<br>';

    $mixed[0] = 'fietspomp';
    $mixed[1] = 'ventiel';
    $mixed[2] = 'lucht';

    for ($i = 0;$i<$resultMixed;$i++){
    echo '<br>' . $mixed[$i];
}
echo '<br>------------<br>';

    $subjects = array('PHP' => 'Ingrid', 'JavaScript' => 'Ed');
    echo $subjects['PHP'] . '<br>';
    echo $subjects['JavaScript'];
?>