<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
body{
margin:0px;
}

    </style>
<?php

use Illuminate\Support\Collection;

$collection = collect([1, 2, 3])->all();


foreach ($collection as $collect)
{
echo $collect."<br>";
}

$average = collect([1, 1, 2, 4])->avg();
echo "Average:".$average."<br>";

$collection = collect([1, 2, 3, 4]);
 
echo $collection->count();

$collection = collect([1, 2, 3, 4]);
 
$collection->push(5);
 
$collection->all();



//use Illuminate\Support\Facades\Cache;

/*
//Cache::put('key', 'Hello', now()->addMinutes(10));


//Cache::put('cin', '1802', now()->addMinutes(10));


//$value = Cache::get('key');
//$value1 = Cache::get('cin');


/*
$seconds="3600";

cache()->remember('users', $seconds, function () {
    return DB::table('users')->get();
});
*/
/*

$value1 = Cache::get('users');

foreach ($value1 as $val)
{
echo $val->name;

}

/*
Cache::forget('cin');
$value1 = Cache::get('cin');

echo $value1;
*/

Cache::flush();


if (isset (Auth()->user()->id)) echo "logged in";
else echo "logged out"; 
?>
</head>
    <body style="overflow:hidden;">
    <a href="/logout">logout</a>
    <div class="container-fluid" style="width:96%;">
    <div class="bd-example-row">
    <span class="text-center"><h1 class="display-4 text-center">Dashboard</h1></span>
    </div>
    <div class="bd-example-row">
     <div class="row">
    <div class="col-10" >
     <div id="1">
     
     </div>
    </div>
    <div class="col-2">
    @include('menu')  
</div>
</div>
    </div></body>
</html>
