<!DOCTYPE html>
<html>
   <head>
      <title>Laravel</title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
      <style>
         html, body {
            height: 100%;
         }
         body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
           
         }
         .container {
            text-align: left;
            display: table-cell;
            vertical-align: middle;
         }
         .content {
            text-align: left;
            display: inline-block;
         }
         .title {
            font-size: 96px;
         }
      </style>
   </head>
   
   <body>

      <?php 
use App\Models\Flight;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Tenant;


$comments = Post::find(1)->comments;

$users = DB::connection('mysql')->table('cin')
->where('dist','625')->where('tehsil','5318')->where_not_null('cin')
->get();

foreach ($users as $user) {
echo $user->cin_s."<br>";
}


/*
Flight::chunk(200, function (Collection $flights) {
    foreach ($flights as $flight) {
        echo $flight->name;
    }
});
*/

/*
$flight = Flight::where('created_at', '2023-12-19 05:53:52')->first();

echo $flight->name;


/*
$flights = Flight::where('active', 1)
               ->orderBy('name')
               ->take(10)
               ->get();
 
foreach (Flight::all() as $flight) {
   echo $flight->name."<br>";
}

/*
$flight = Flight::create([
    'name' => 'London to Paris',
    'hello'=>'Wow'
]);

/*

      class hello {
      public $name;

      public function __construct($name)
      {
      $this->name=$name;   
      
      }
   
      public function get_v ()
      {
      echo $this->name;  
      }

      }
      
      $vs=New hello ('How are you');
      $vf=$vs->get_v ();

      echo $vf;

      use Illuminate\Support\Collection;

  Session::put('cin', '00001');
 
   $v=Session::get('cin');
   echo $v;

   
    // Specifying a default value...
    $value = session('key', 'default');
 
    // Store a piece of data in the session...
    session(['key' => 'value']);


      DB::connection('mysql')->table('cin')->insertOrIgnore([
         'first_name' => 'Abhishek'
     ]);
      
     
     

      
  DB::connection('mysql')->table('cin')->orderBy('cin_s')->chunk(100, function (Collection $users) {
   foreach ($users as $user) {
       echo $user->cin."<br>";
   }
});   
//      $users = DB::connection('mysql')->table ('cin')->where ('cin','028210000004')->first();
 
//echo $users->cin;
      
      
      if(DB::connection()->getPdo()) 
      { 
          echo "Successfully connected to the database => " 
                       .DB::connection()->getDatabaseName(); 
      } 
      
      */
      ?>

  

<? /* ?>
      <div class = "container">
      <div class = "content">
       @include('newpage')
      <form method="post" name="form" id="form">
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="input1" id="input1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="input2" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>      </div>
			</div>
   <? */ ?>
         

</div>    
         
   </body>
</html>