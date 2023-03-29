<!DOCTYPE html>
<html>
<head>
	<title>Area of a trapezoid calculator</title>
</head>
<body>
  <link rel="stylesheet" 
    <link rel="stylesheet" href="./css/style.css">
  <!--calculations-->
	<?php
	if(isset($_POST['submit'])) {
		$b1 = $_POST['b1'];
		$b2 = $_POST['b2'];
		$h = $_POST['h'];
		$area = ($b1 + $b2) * $h / 2;
		echo "<h1>Area of a trapezoid calculator</h1>";
		echo "<p>The area of the trapezoid is " . number_format($area, )   . " cm²</p>";
	} else {
		echo "<h1>Error</h1>";
		echo "<p>Sorry, there was an error calculating the area of the trapezoid. Please try again.</p>";
	}
	?>
 <!--image for trapezoid-->
  <br>
					<img src="./images/Trapezoid.png" alt="Trapezoid" width="750" height="500"/>
</body>
</html>
