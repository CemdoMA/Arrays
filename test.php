<?php



$teachers = array('theo','erwin','edward');

//echo $teachers[1];
//maak van erwin --> jelle

$teachers[1] = 'jelle';

//inhoud bekijken

    //var_dump($teachers);
    //print_r($teachers);

for ($i = 0;$i < 3; $i++){

    echo '<p>' . $teachers[$i] . '</p>';
}
 echo '---------------';
//Voeg 1 toe:
//$teachers[] = 'theo';

array_push($teachers, 'hans','hugo','petter');

foreach ($teachers as $one_teachers){
    echo '<p>' . $one_teachers . '</p>';
}

//associative array?

//$subject = array('ingrid' => 'bap', 'joey' => 'pro','gerrit' => 'rek',);
//
//echo $subject['ingrid'];
//
//foreach ($subject as $teacher => $subject){
//
//    echo $teacher . '';
//}
?>

