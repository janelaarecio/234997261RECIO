<!DOCTYPE html>
<html>
<body>
    <?php
    

$number = -4;  

if ($number % 2 == 0) {
    echo $number . " is even.\n";
} else {
    echo $number . " is odd.\n";
}

if ($number > 0) {
    echo $number . " is positive.\n";
} elseif ($number < 0) {
    echo $number . " is negative.\n";
} else {
    echo $number . " is zero.\n";
}

    ?>
</body>
</html>
