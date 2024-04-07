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
    
   
    $users = DB::connection('mysql')->table('employee')->get();
    
    if ($_GET ['id']) $users1 = DB::connection('mysql')->table ('employee')->where ('employee_id',$_GET ['id'])->first();
 
    
    
    ?>
    
    <div class="container-fluid" style="width:96%;">
    <div class="bd-example-row">
    <span class="text-center"><h1 class="display-4 text-center">Dashboard / Edit <?php if ($_GET ['id']>0) { ?>/ <?=$_GET ['id'] ?><?php } ?></h1></span>
    </div>
    <div class="bd-example-row">
     <div class="row">
    <div class="col-10" >
    <?php if ($_GET ['id']>0) { ?>
        <div style="width:96%;">
        <form enctype="multipart/form-data" method="post" action="{{ route('ajax.validation.update') }}">
        @csrf
        <input type="hidden" class="form-control" id="employeeid" value="<?php echo $users1->employee_id;
     ?>" placeholder="First Name" name="employeeid">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" value="<?php echo $users1->firstname;
     ?>" placeholder="First Name" name="firstname">
                <span class="text-danger error-text email_err"></span>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" value="<?php echo $users1->lastname;
     ?>" placeholder="Last Name" name="lastname">
                <span class="text-danger error-text pswd_err"></span>
            </div>
            <div class="form-group">
                <label for="birthdate">Date of Birth:</label>
                <input type="date" class="form-control" id="birthdate" value="<?php echo $users1->date_of_birth; ?>" placeholder="Birth Date" name="birthdate">
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="qualification">Education Qualification</label>
                <input type="text" class="form-control" id="qualification" value="<?php echo $users1->education_qualification;
     ?>" placeholder="Education Qualification" name="qualification">
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" id="address" placeholder="Address"><?php echo $users1->address;
     ?></textarea>
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" value="<?php echo $users1->email;
     ?>" name="email">
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" value="<?php echo $users1->phone;
     ?>" name="phone">
                <span class="text-danger error-text address_err"></span>
            </div>
                    <div class="form-group">
                <label for="resume">Resume:</label><br>
                <input type="file" name="resume" id="resume">
                <span class="text-danger error-text image_err"></span>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label><br>
                <input type="file" name="photo" id="photo">
                <span class="text-danger error-text image_err"></span>
            </div>
            
            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
        </form>
    </div>
    <?php } else { ?>
    
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
    <tr>
      <th scope="row"><?=$user->employee_id ?></th>
      <td><?=$user->firstname;  ?></td>
      <td><?=$user->lastname;  ?></td>
      <td><?=$user->date_of_birth;  ?></td>
      <td><?=$user->address;  ?></td>
      <td><?=$user->email;  ?></td>
      <td><?=$user->phone;  ?></td>
      <td>NA</td>
      <td>NA</td>
      <td><a href="/edit?id=<?=$user->employee_id ?>"><svg xmlns="http://www.w3.org/2000/svg" style="cursor:pointer" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a></td>
      
    </tr>
    <?php } ?>
    
  </tbody>
</table>
     
     </div>
     <?php } ?>

    </div>
    <div class="col-2">
    @include('menu')  
</div>
</div>
    </div></body>
</html>
