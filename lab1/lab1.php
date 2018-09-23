<html>
<head>
    <meta charset="utf-8">
    <title>Задание 3</title>
</head>
<body>

<?php
echo ("\n1.3. В массиве строк удалите все теги, заключенные в угловые скобки <>.\n\n");
echo "<br/>";
echo "<br/>";
$array = array();
$M = 5;

echo "Начальные данные:\n";
echo "<br/>";
for ($i=0; $i < $M; $i++) { 
    $rand = rand(0, 2);

    switch ($rand) {
        case 0:
            $array[] = "строка";
            break;
        case 1:
            $array[] = "<тэг>";
            break;
        case 2:
            $array[] = "строка с <тэгом>";
            break;
    }
}

for ($i=0; $i<count($array) ; $i++) { 
    echo ($array[$i]  . " -- строка №". $i . "\n");echo "<br/>";
}
echo "<br/>";

echo ("\nРезультат:\n");
echo "<br/>";

for ($i=0; $i < count($array); $i++) { 


    if($array[$i][0] == '<' && $array[$i][strlen($array[$i]) - 1] == '>') {
        array_splice($array, $i, 1);
    }
}

for ($i=0; $i<count($array) ; $i++) { 
    echo ($array[$i] . " -- строка №". $i . "\n");
    echo "<br/>";
}

?>
</body>
</html>

