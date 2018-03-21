<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Even, Odd, or Char</title>
</head>
<body>
    <?php
	# Three Values
	$EvenNum = 8;
	$OddNum = 5;
	$NotNum = 'Hi';

	# Determines if $EvenNum is Even, odd, or not numeric
	if (is_numeric($EvenNum) && $EvenNum % 2 == 0){
		echo("<p>$EvenNum is an even numeric value.</p>");
	} elseif (is_numeric($EvenNum) && $EvenNum % 2 > 0) {
		echo("<p>$EvenNum is an odd numeric value.</p>");
	} else {
		echo("<p>$EvenNum is not numeric.</p>");
	}

	# Determines if $OddNum is Even, odd, or not numeric
	if (is_numeric($OddNum) && $OddNum % 2 == 0){
		echo("<p>$OddNum is an even numeric value.</p>");
	} elseif (is_numeric($OddNum) && $OddNum % 2 > 0) {
		echo("<p>$OddNum is an odd numeric value.</p>");
	} else {
		echo("<p>$OddNum is not numeric.</p>");
	}

	# Determines if $NotNum is Even, odd, or not numeric
	if (is_numeric($NotNum) && $NotNum % 2 == 0){
		echo("<p>$NotNum is an even numeric value.</p>");
	} elseif (is_numeric($NotNum) && $NotNum % 2 > 0) {
		echo("<p>$NotNum is an odd numeric value.</p>");
	} else {
		echo("<p>$NotNum is not numeric.</p>");
	}
	
	?>
	<!-- Input from user, and outputs the value and  determines if 
	its if the value is Even, odd, or not numeric  -->
    <h3>Enter a input below to see if it is even, odd, or not numeric: </h3>
    <form name="form" action="findOut.php" method="post">
    <input name="info" type = "text">
    <input type="submit" class="button" name="select" value="select" />
    </form>

</body>
  
</html>
