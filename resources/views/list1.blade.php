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
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
body{
margin:0px;
}

    </style>
    </head>
    
    <body style="overflow:hidden;">
    <?php
   
    
    
    ?>
    <script>

    </script>
    <div class="container-fluid" style="width:96%;">
    <div class="bd-example-row">
    <span class="text-center"><h1 class="display-4 text-center">Dashboard / List</h1></span>
    </div>
    <div class="bd-example-row">
    <div class="row">
      <div class="col-10" >
      <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search by employee id" id="search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" id="but_search"  type="submit">Search</button>
</div>
      </div>
      <div class="col-2" ></div>
    </div>
     <div class="row">
    <div class="col-10" >
     <div id="cp">
    
     @include ('employees')
     
     </div>
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
  </body>
</html>
