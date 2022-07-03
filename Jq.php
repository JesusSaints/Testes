<?php
		$paginas = ['Jesus','Senhor','Contato'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jesus Cristo</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;



		}
		header{
			background-color:#191970;
			padding: 15px 20px;
			text-align: center;

}
a{
	display: inline-block;
	margin: 0 15px;
	color: white;
	font-size: 30px;



}




	</style>
</head>
<body>
	<header>
		<?php
			foreach ($paginas as $key => $value) {
				echo '<a href="?page='.$key.'">'.$key.'</a>';
			}




		?>


	</header>


</body>
</html>