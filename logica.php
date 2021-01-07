<?php

foreach ($hotels as $element) {
    
    // var_dump($element);
    foreach ($element as $key => $value) {
        echo $key . ": " . $value . '<br>'; 
    }

    echo '<br>';
}