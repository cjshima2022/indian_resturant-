<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>Contact Us</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css">
	
	</head>
		<body>
<?php include '../resources/navigation.php'; ?>

<div class="container">

<header><h1>Contact Us</h1></header>
			<p>If you have any questions, contact us with provided number below.</p>
			<ul>
				<li><b>Brett Dewerff</b>: <br> 515-555-1242</li> <!--- This is a fake number -->
				<li><b>Bishnu Adhikari</b>: <br> 515-555-1243</li> <!--- This is a fake number -->
			</ul>
				<header><h3>Follow Us</h3></header>
				<ul> 
					<li><b>Instagram</b>: @NewDelhiResturant <br> <b>Tag Us</b>: #NewDelhiResturant</li>
				</ul>
				<header><h3>Tweet Us</h3></header>
				<ul>
					<li><b>Twitter</b>: @NewDelhiResturant <br> <b>Tag Us</b>: #NewDelhiResturant </li>
				</ul>
				<header><h3>Snap Us</h3></header>
				<ul>
					<li><b>Snapchat</b>: @NewDelhiResturant <br> <b>Tag Us</b>: #NewDelhiResturant</li>
				</ul>
			
			<p>If you have any comments please leave a message bellow.</p>

<form action="newdelhi@yahoo.com" method="get"> <!--- This is a fake email -->
Subject: <input type="text" name="subject"><br>
<br>
Comment: <textarea name="body"></textarea><br>
<br>
<input type="submit" value="Send" class="btn btn-primary">
</form>

<?php include '../resources/footer.php'; ?>

</div>

</body>
</html>



