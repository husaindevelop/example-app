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
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    
    
    <style>
body{
margin:0px;
}
.dataTables_length,
.dataTables_wrapper {
  font-size: 1rem;
  
  select
  {
    background-color: #f9f9f9;
    border: 1px solid #999;
    border-radius: 4px;
    height: 2rem;
    line-height: 1;
    font-size: 1rem;
    color: #333;
  }
  input {
    background-color: #f9f9f9;
    border: 1px solid #999;
    border-radius: 4px;
    height: 2rem;
    line-height: 1;
    font-size: 1rem;
    color: #333;
  }

  .dataTables_length,
  .dataTables_filter {
  margin-right: 20px;
    display: inline-flex;
  }
}

// paginate

.paginate_button {
  min-width: 4rem;
  display: inline-block;
  text-align: center;
  padding: 1rem 1.6rem;
  margin-top: -1rem;
  border: 2px solid lightblue;
  &:not(.previous) {
    border-left: none;
  }
  &.previous {
    border-radius: 8px 0 0 8px;
    min-width: 7rem;
  }
  &.next {
    border-radius: 0 8px 8px 0;
    min-width: 7rem;
  }

  &:hover {
    cursor: pointer;
    background-color: #eee;
    text-decoration: none;
  }
}


    </style>
    </head>
    
    <body>
   <?php
   
   $users = DB::connection('mysql')->table('employee')->orderBy('employee_id', 'asc')->get();
     
    
    ?>
    
    <div class="container-fluid" style="width:96%;">
    <div class="bd-example-row">
    <span class="text-center"><h1 class="display-4 text-center">Dashboard / List</h1></span>
    </div>
    <div class="bd-example-row">
    
     <div class="row">
  <div class="col-10" >
    <table id="example" width="100%" class="table table-striped">
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
    <div class="col-2">
    @include('menu')  
</div>
</div>
    </div>
  <script>
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$('#but_search').click(function(){
         var userid = $('#search').val().trim();
         
           $.ajax({
              url: 'users',
              type: 'post',
              data: {_token: CSRF_TOKEN, userid: userid},
              success: function(response){
                //console.log(response.error)
                //alert (response);
                 $('#cp').html (response);

              }
           });
         

      });

  

  </script>
  <script>
$(document).ready(function() {
  $("#example").DataTable();
});

</script>

  </body>
</html>
