<html>
<body>

<a href="backend.php">Overview</a></br>

<form action="image_upload.php" method="get" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"></br>
<input type="hidden" name="user" value="bar"></br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
	if (isset($_GET["user"])) {
		$user = $_GET["user"];
		$base_dir = '/var/www/MagicMirror/photos/';
		$user_dir = $base_dir.$user;
		
		if ($handle = opendir($user_dir)) {
    		echo 'Files:' . '</br>';

    		while (false !== ($file = readdir($handle))) {
    			$image_url = './photos/' . $user . '/' . $file;
        		echo '<img src="' . $image_url . '"></br>';
   			}
    	}
	} else {
		echo 'no user set' . '</br>';
	}
?>

</body>
</html>
