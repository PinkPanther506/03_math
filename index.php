<?php

/**Простые множители, разложите $x = 600851475143, на простые множители,
 * а после найдите самый большой и самый наименьший простой множитель этого числа. 
 */

$z = 600851475143;

$array = array();

while ($z >= 2) {

    while ($z % 2 == 0) {
        echo $z;
        $z = $z / 2;
        echo " 2 <br/>";
        $x = 2;
        array_push($array, $x);
    }

    while ($z % 3 == 0 && $z % 2 != 0) {
        echo $z;
        $z = $z / 3;
        echo " 3 <br/>";
        $x = 3;
        array_push($array, $x);
    }

    while ($z % 5 == 0 && $z % 2 != 0) {
        echo $z;
        $z = $z / 5;
        echo " 5 <br/>";
        $x = 5;
        array_push($array, $x);
    }

        while ($z % 7 == 0 && $z % 2 != 0) {
        echo $z;
        $z = $z / 7;
        echo " 7 <br/>";
        $x = 7;
        array_push($array, $x);
    }

    if ($z >= 11 && $z % 2 != 0 && $z % 3 != 0 && $z % 5 != 0 && $z % 7 != 0) {
        echo $z;
        for ($t = 9; $z % $t != 0; $t++) {
            $r = $t;
        }
        $r++;
        $x = $r;
        array_push($array, $x);
        $z = $z / $r;
        echo " " . $r . "<br/>";
    }

}

echo $z;
echo "<br/>";
echo "<br/>" . "Самый большой, простой множитель " . max($array);
echo "<br/>" . "Самый наименьший, простой множитель " . min($array);

?>