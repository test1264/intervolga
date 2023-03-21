<?php
    $a = 10;
    $ar = [205, 123, 2, 364, 342, 41, 66, 24, 56, 257, 2435];

    ar_print($ar);

    for($i = 0; $i < count($ar); $i++)
    {
        if(true === isHave2($ar[$i]))   // вставка элемента $a при каждом нахождении числа с цифрой 2
        {
            pushIn($ar, $a, $i);
        }    
    }

    ar_print($ar);

    function isHave2($elem) 
    {
        if(false !== strpos((string)$elem, 2)) // проверка наличия цифры 2 в числе
            return true;
        else
            return false;
    }

    function pushIn(&$ar, $a, $i)
    {
        $prev = $a;
        for($j = $i+1; $j < count($ar); $j++)   // вставка элемента $a после найденного числа с цифрой 2, сдвиг на один элемент всех значений массива
        {
            $tmp = $ar[$j];
            $ar[$j] = $prev;
            $prev = $tmp;
        }
        array_push($ar, $prev);
    }

    function ar_print($ar)
    {
        foreach($ar as $t)
            echo $t . ' ';
        echo '<br>';
    }
?>