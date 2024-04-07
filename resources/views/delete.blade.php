<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
  
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
    <span class="text-center"><h1 class="display-4 text-center">Dashboard / Delete</h1></span>
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
      <th scope="col">&nbsp;</th>
</tr>
  </thead>

  <tbody>
    <?php
    foreach ($users as $user) {


?>
    <tr id="id<?=$user->employee_id ?>">
      <th scope="row"><?=$user->employee_id ?></th>
      <td><?=$user->firstname;  ?></td>
      <td><?=$user->lastname;  ?></td>
      <td><?=$user->date_of_birth;  ?></td>
      <td><?=$user->address;  ?></td>
      <td><?=$user->email;  ?></td>
      <td><?=$user->phone;  ?></td>
      <td>NA</td>
      <td>NA</td>
      <td><button type="button" onclick="$('#id<?=$user->employee_id ?>').remove ();go_delete ('<?=$user->employee_id ?>')" class="btn-close" aria-label="Close"></button></td>
      
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
  <script>
    function go_delete (id)
    {
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
         
           $.ajax({
              url: 'delete_users',
              type: 'post',
              data: {_token: CSRF_TOKEN, userid: id},
              success: function(response){
                //console.log(response.error)
                //alert (response);
                
                 //$('#cp').html (response);

              }
           });
         

      
    }

  </script>
  </body>
</html>
