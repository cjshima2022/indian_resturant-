<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css">
	
</head>
<body> 
	
<?php include '../resources/navigation.php'; ?>
<br>
<div class="container">  
  <header><h1>Login</h1></header>
<br>
  <form>
  Username or Email:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="text" name="password">
  <br>
  <br>
  <input type="submit" value="Submit" class="btn btn-primary">
  </form>
  
<?php include '../resources/footer.php'; ?>

</div>

</body>
</html>