<?php
  setcookie("first_name", $_POST['firstName'], time() + (86400 * 30));
  setcookie("last_name", $_POST['lastName'], time() + (86400 * 30));
  setcookie("email", $_POST['email'], time() + (86400 * 30));
?>
<!doctype html>
<html>
  <head> 
    <title>Registration</title>
    <meta name="author" content="Xinyue Guo">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <h1 class="header">Registration succeeded!</h1>
    <h2> Your information will be stored for a month.</h2>
  </body>
</html>
