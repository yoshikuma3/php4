<?php
    for ($i = 1; $i < 15; $i++){
    if ($i % 15 === 0){
        break;
    }
    if ($i %2 === 0){
        continue;
    }
    echo $i . ' '."\n";
    }
    
    $a = "for_out";
    echo $a."\n";
?>