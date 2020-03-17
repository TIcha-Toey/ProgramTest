<?php
    $marks =array(
        "mohammad"=>array(
        "physics"=>35,
        "maths"=>30,
        "chemistry"=>39
        ),
        "qadir"=>array(
        "physics"=>30,
        "maths"=>32,
        "chemistry"=>29
        ),
        "zara"=>array(
        "physics"=>31,
        "maths"=>22,
        "chemistry"=>39
        ));
        echo "3.2.1. ";
        echo $marks['mohammad']['physics'] . "<br>"; 

        echo "3.2.2. ";
        echo $marks['mohammad']['physics']. " "; 
        echo $marks['mohammad']['maths']. " " ; 
        echo $marks['mohammad']['chemistry']. " " ; 
        echo $marks['qadir']['physics']. " " ; 
        echo $marks['qadir']['maths']. " "; 
        echo $marks['qadir']['chemistry']. " " ; 
        echo $marks['zara']['physics']. " " ; 
        echo $marks['zara']['maths']. " " ; 
        echo $marks['zara']['chemistry'] ; 
?>