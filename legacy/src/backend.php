<html>
<body>

<form action="backend.php" method="get">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<?php
	// preparing variables
	$base_dir = '/var/www/MagicMirror/photos/';

	if (isset($_GET["name"])) {
		$user_name = $_GET["name"];
		$directory = $base_dir.$user_name;
		
		// this checks for the user directory and creates it if neccessary
		if (!file_exists($directory)) {
    		mkdir($directory, 0777, true);
		}	
		
		echo 'user ' . $user_name . ' created</br>';
	}

	// this lists all the user directories
	if ($handle = opendir($base_dir)) {
    	echo 'Files:' . '</br>';

    	while (false !== ($file = readdir($handle))) {
        	echo '<a href=./user.php?user=' . $file . '>' . $file . '</a></br>';
   		}
    }

    closedir($handle);
?>

</body>
</html>
