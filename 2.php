<?php

$char = '3';

if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
    echo 'Character is an Alphabet';
} else if ($char >= 0 && $char <= 9){
    echo 'Character is a Digit';
} else {
    echo 'Character is a Special Charecter';
}

?>