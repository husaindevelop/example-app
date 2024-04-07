

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Register</h1>

    <?php
    foreach ($errors->all () as $error)
    {
    echo $error."<br>";
    
    }
    ?>
<form  action="{{ route ('loginAuth') }}"  method="post">
@csrf
    <!-- Name -->
    
    <!-- Email-->
    <table width="100%" cellpadding="0" cellspacing="0" class="mt111516">
    <tr><td><label for="email">Email</label>
    <input type="email" name="email" id="email"  />

    <!-- Password -->
    <label for="password">Password</label>
    <input type="password" name="password" id="password"  />

    <label for="login">Remember</label>
    <input type="checkbox" name="remember" id="remember"  />

    <!-- Submit button -->
    <button type="submit">Login</button>
    </td></tr>
</table>
</form>
    </body>
</html>