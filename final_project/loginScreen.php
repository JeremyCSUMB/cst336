<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <title> Admin Login </title>
    </head>
    <body>

        <h1> Ottercars - Admin Login </h1>
        
        <form method="post" action="inc/loginProcess.php">
          Username:  <input type="text" name="username" id="username"/><span id="usernameError" class="error"></span> <br>
          <br>
          Password:  <input type="password" name="password"/> <br>
          <br>
          <input type="submit" value="Login">
        </form>
        <br>
        <form action="index.php">
            <input type="submit" value="Home" />
        </form>
    </body>
</html>