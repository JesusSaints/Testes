<?php
	$paginas = ["Jesus"=>"Salvador","Home"=>"Eterno","Contato"=>"Senhor"];




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jesus Cristo</title>
	<style type="text/css">
		*{
			margin: 30px 0px;
			padding: 0;
			box-sizing: border-box;
		}
		header{
			background: #006400;
			padding: 15px 20px;
			text-align: center;

		}


	</style>



</head>
<body>
	<head>
		<?php
			foreach ($paginas as $key => $value) {
				echo '<a href="?page='.$key.'">'.$key.'</a>';
			}


		?>
	</head>



</body>
</html>