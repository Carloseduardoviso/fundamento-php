<?php
    $a = 12345;
    $a = 0x1A;
    echo gettype($a);
    /* inteiro */
?>

<?php
    $a = "a";
    echo gettype($a);
    /* string */
?>

<?php
    $a = 1000;
    $a = $a*12120101210;

    echo gettype($a);
    /* double */
?>