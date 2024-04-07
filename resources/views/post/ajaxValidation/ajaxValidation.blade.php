<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ajax Validation Laravel 9</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    

    <div class="container" style="margin-top: 100px;">
        <h2>Ajax Validation form Laravel 9</h2>
        <form enctype="multipart/form-data" method="post" action="{{ route('ajax.validation.store') }}">
        @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                <span class="text-danger error-text email_err"></span>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                <span class="text-danger error-text pswd_err"></span>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
                <span class="text-danger error-text address_err"></span>
            </div>
            <div class="form-group">
                <label for="address">:</label>
                <input type="file" name="image" id="image">
                <span class="text-danger error-text image_err"></span>
            </div>
            
            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
        </form>
    </div>

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