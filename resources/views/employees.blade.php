
<?php
if (isset ($emp)) 
{
$users = DB::connection('mysql')->table('employee')->where('employee_id',$emp)->get();
}
else {
$users = DB::connection('mysql')->table('employee')->get();
}

?>
<?php  ?>
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
      <script>
     
        </script>
    </tbody>
  </table>
    