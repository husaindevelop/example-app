<?php

use App\Models\Tenant;
use App\Models\Rent;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php 
    
    $rent_n = Tenant::find(1)->rent_latest;
    echo $rent_n ['rent']."<br>";

    $tenants = Rent::find(1);
 
echo $tenants->tenant->rent[0]->rent."<br>";
    
    
    $rents = Tenant::find(1)->rent()->where('rent', '>', 500)->first();
    echo $rents ['rent']."<br>";
    
    $rent = Tenant::find(1)->rent;

    foreach ($rent as $rents)
    {
    echo $rents ['rent']."<br>";

    }
    //$rents = Tenant::find(1)->rent()->where('rent', '>', 500)->first();
    //echo $rents;
    
    ?>
    
    </body>
</html>