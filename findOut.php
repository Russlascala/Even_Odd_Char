<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Value is..</title>
</head>
    <body>
 
    <?php   
    $info = $_POST["info"];
    echo "<p>Your input is: $info</p>";

   
    if (is_numeric($info) && ($info % 2 == 0)){
		echo("<p>$info is an even numeric value.</p>");
	} elseif (is_numeric($info) && ($info % 2 > 0)) {
		echo("<p>$info is an odd numeric value.</p>");
	} else {
		echo("<p>$info is not a numeric value.</p>");
	}

    ?>

    </body>
</html>