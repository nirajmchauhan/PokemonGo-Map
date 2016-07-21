<?php require_once('requests.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pokemon Locator</title>
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- js -->
	<script src="/jquery.js"></script>
	<style>
		iframe{
			margin:10px 0 0 0;
			border:0;
			width:100vw; 
			height:80vh;
		}
		body{
			margin:20px 0 0 0;
		}
	</style>
</head>
<body>
	<?php 	
	if(isset($_GET['view'])){
		require_once('partials/map.php');
	}else{
		require_once('partials/form.php');
	}
	?>
</body>
</html>