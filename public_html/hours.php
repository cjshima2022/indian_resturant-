<!DOCTYPE html> 
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Hours</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css">
	
</head>
<body>

<?php include '../resources/navigation.php'; ?>
<br>

<div class="container">
<header><h1>Hours</h1></header>
<br>
<b>Restaurant Hours:</b>
<table class="table">
 <thead class="thead-dark">
  <tr>
   <th>Days</th>
   <th>Hours</th>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td>Sunday-Thursday</td>
   <td>10AM-9PM</td>
  </tr>
  <tr>
   <td>Friday, Saturday</td>
   <td>10AM-10PM</td>
  </tr>
 </tbody>
</table>
<br>
<b>Buffet Hours:</b>
<table class="table">
 <thead class="thead-dark">
  <tr>
   <th>Days</th>
   <th>Lunch</th>
   <th>Dinner</th>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td>Friday</td>
   <td>10AM-2PM</td> 
   <td>5PM-10PM</td>
  </tr>
  <tr>
   <td>Saturday</td>
   <td>10AM-2PM</td>
   <td>5PM-10PM</td>
  </tr>
  <tr>
   <td>Sunday</td>
   <td>10AM-2PM</td>
   <td>5PM-9PM</td>
  </tr>
 </tbody>
</table>


<?php include '../resources/footer.php'; ?>
</div>

</body>
</html>