<!DOCTYPE html>  
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css">
	
</head>
<body>

<?php include '../resources/navigation.php'; ?>
<br>
<div class="container">
<header><h1>Sign Up</h1></header>
	First Name:<br>
	<input type="text"
	name="firstname"> 
	<br>
	Last Name:<br>
	<input type="text"
	name="lastname">
	<br>
	Email: <br>
	<input type="text"
	name="email">
	<br>
	Username:<br>
	<input type="text"
	name="username">
	<br>
	Password:<br>
	<input type="text"
	name="password">
	<br>
	Verify Password:<br>
	<input type="text"
	name="password">
	<br>
	Date of Birth: <br>
	<input type="text"
	name="dateofbirth">
	<br>
	Gender:<br>
	<input type="radio"
	name="gender" value="male" 
	checked> Male<br>
	<input type="radio"
	name="gender" value="female">
	Female<br>
	<input type="radio"
	name="gender" value="other">
	Other
	<br>
	<br>

	<input type="submit" value="Submit" class="btn btn-primary">
<br>
<br>
<?php include '../resources/footer.php'; ?>

</div>

</body>
</html>
