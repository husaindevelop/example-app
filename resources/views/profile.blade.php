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

use Illuminate\Support\Collection;

DB::connection('mysql')->table('cin')->insertOrIgnore([
    'first_name' => $_POST ['input1']
]);

//return redirect()->back()->with('success', 'your message,here');   
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
      
     /*
      $users = DB::connection('mysql')->table('cin')
      ->where('dist','625')->where('tehsil','5318')->where_not_null('cin')
      ->get();

      foreach ($users as $user) {
         echo $user->cin_s."<br>";
     }
     

      
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
  
     
   
         
   </body>
</html>