<html>
<head></head>
<body>

<?php
	if (isset($_GET["user"]) && $_FILES['userfile']['error'] > 0) {
		$user = $_GET["user"];
		$base_dir = '/var/www/MagicMirror/photos/';
		$user_dir = $base_dir.$user;
		$uploadfile = $user_dir . basename($_FILES['userfile']['name']);

		echo '<pre>';
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";
		} else {
			echo "M&ouml;glicherweise eine Dateiupload-Attacke!\n";
		}

		echo 'Weitere Debugging Informationen:';
		print_r($_FILES);

		print "</pre>";
	}	
?>
	
</body>
</html>