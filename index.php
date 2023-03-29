<!DOCTYPE html>
<html>
<head>
  <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon on this page-->
     <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" 
    <link rel="stylesheet" href="./css/style.css">
	
  <title>Calculate the area of a trapezoid</title>
</head>
<body>
	<h1>Area of a trapezoid calculator</h1>
    <!--enter values-->
	<form action="calculate.php" method="post">
		<label for="b1">Side a:</label>
		<input type="number" id="b1" name="b1" step="0.001" required><br><br>
		<label for="b2">Side b:</label>
		<input type="number" id="b2" name="b2" step="0.001" required><br><br>
		<label for="h">Height:</label>
		<input type="number" id="h" name="h" step="0.001" required><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
  <!--image for trapezoid-->
  <br>
	<img src="./images/Trapezoid.png" alt="Trapezoid" width="750" height="500"/>
</body>
</html>
