<!doctype html>
<html>
	<head>
		<title>Welcome</title>
    <meta name="author" content="Xinyue Guo">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
    <h1>Registration Form</h1>
		<section>
      <form class='registration-form' action='register.php' method='post'>
        <?php
        	if (!isset($_COOKIE["first_name"]))
        	{
          	echo "<label>First Name</label><br>";
          	echo "<input name='firstName' type='text'><br>";
          	echo "<label>Last Name</label><br>";
          	echo "<input name='lastName' type='text'><br>";
          	echo "<label>Email Address</label><br>";
          	echo "<input name='email' type='text'><br>";
          	echo "<input name='submit' type='submit'>";
        	}
        	else
        	{
          	echo "Hi, " . $_COOKIE["first_name"] . ", you recently signed up with the email address: " . $_COOKIE["email"] . ", thank you!";
        	}
        ?>
      </form>
		</section>
	</body>
</html>
