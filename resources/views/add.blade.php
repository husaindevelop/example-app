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
   
   $users1 = DB::connection('mysql')->table ('employee')->orderBy('employee_id', 'desc')->first();
   
    
    ?>
    <div class="container-fluid" style="width:96%;">
    <div class="bd-example-row">
    <span class="text-center"><h1 class="display-4 text-center">Dashboard / Add</h1></span>
    </div>
    <div class="bd-example-row">
     <div class="row">
    <div class="col-10" >
    <div style="width:90%;">
    <form enctype="multipart/form-data" method="post" action="{{ route('ajax.validation.store') }}">
        @csrf
        <input type="hidden" id="" name="employeeid" value="<?=$users1->employee_id+1; ?>">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
                <span class="text-danger error-text email_err"></span>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Last Name" name="lastname">
                <span class="text-danger error-text pswd_err"></span>
            </div>
            <div class="form-group">
                <label for="birthdate">Date of Birth:</label>
                <input type="date" class="form-control" id="email" placeholder="Birth Date" name="birthdate">
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="qualification">Education Qualification</label>
                <input type="text" class="form-control" id="qualification" placeholder="Education Qualification" name="qualification">
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
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
    </div>
    <div class="col-2">
    @include('menu')  
</div>
</div>
    </div></body>
</html>
</body>
</html>

    

    

    <script type="text/javascript">
        /*
        $(document).ready(function() {
            $(".btn-submit").click(function(e){
                e.preventDefault();

                var _token = $("input[name='_token']").val();
                var email = $("#email").val();
                var pswd = $("#pwd").val();
                var address = $("#address").val();
                var image = $('#image').prop('files')[0];
                $.ajax({
                    url: "{{ route('ajax.validation.store') }}",
                    type:'POST',
                    data: {_token:_token, email:email, pswd:pswd,address:address,image:image},
                    success: function(data) {
                    console.log(data.error)
                        if($.isEmptyObject(data.error)){
                            alert(data.success);
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
            }); 

            function printErrorMsg (msg) {
                $.each( msg, function( key, value ) {
                    console.log(key);
                    $('.'+key+'_err').text(value);
                });
            }
        });
        */
    </script>
</body>
</html>