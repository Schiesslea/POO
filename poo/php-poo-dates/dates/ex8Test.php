<?php

// Comparaison de dates

$date1 = new DateTime("2020-02-18");
$date2 = new DateTime("2019-03-24");
if ($date1<$date2) {
    echo "date1 est inférieure à date2";
} else {
    echo "date1 est postérieure ou égale à date2";
}