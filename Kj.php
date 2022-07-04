<?php

		$paginas = ['Jesus','Santo','Contato'];

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
			background: #068;
			padding: 8px 12px;
			text-align: Center;


		}
a{
	display: inline-block;
	margin: 10px;
	color: white;
	font-size: 23px;


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