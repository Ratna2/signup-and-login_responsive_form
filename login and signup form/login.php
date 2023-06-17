<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/form.css" />
  </head>
  <body>
    <div class="form">
      <h2>Login Form</h2>
      <form action="" autocomplete="off">
        <div class="error-text">Error</div>
      <div class="input">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" required>
    </div>
        <div class="input">
            <label>Password</label>
            <input type="password" name="pass" placeholder="Password" required>
        </div>
        <div class="submit">
      <input type="submit" value="Login Now" class="button">
    </div>
    </form>
    <div class="link">Not signed up? <a href="register.php">Signup now</a></div>
    </div>

 
  <script src="js/login.js"></script>
  </body>
</html>
