<?php
    $ncli = file("http://bienvu.net/misc/customers.csv.");
    explode(",",$ncli);
    echo $ncli[0];
?>