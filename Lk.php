<?php

				$paginas = ['Home','Sobre','contato'];


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
			background: #191970;
			padding: 8px 12px;
			text-align: center;
		}
		a{
			display: inline-block;
			color: white;
			margin: 15px;
			font-size: 18px;
		}
</style>
</head>
	<header>
			<?php

					foreach ($paginas as $key => $value) {
					echo '<a href="?page='.$key.'">'.$key.'</a>';
					}
			?>
	</header>

<body>


</body>
</html>