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
    </head>
    
    <body>
    <?php
   
    $users = DB::connection('mysql')->table('employee')->orderBy('employee_id', 'asc')->get();
    
    
    ?>
    <div class="container-fluid" style="width:96%;">
    <div class="bd-example-row">
    <span class="text-center"><h1 class="display-4 text-center">Dashboard / View</h1></span>
    </div>
    <div class="bd-example-row">
     <div class="row">
    <div class="col-10" >
     <div id="1">
     <table class="table table-striped">
  <thead class="">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Photo</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>

  <tbody>
    <?php
    foreach ($users as $user) {

        ?>
    <tr>
      <th scope="row"><?=$user->employee_id ?></th>
      <td><?=$user->firstname;  ?></td>
      <td><?=$user->lastname;  ?></td>
      <td><?=$user->date_of_birth;  ?></td>
      <td><?=$user->address;  ?></td>
      <td><?=$user->email;  ?></td>
      <td><?=$user->phone;  ?></td>
      <td><?=$user->photo;  ?></td>
      <td><?=$user->resume;  ?></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
     
     </div>
    </div>
    <div class="col-2">
    @include('menu')  
</div>
</div>
    </div>
  
  </body>
</html>
