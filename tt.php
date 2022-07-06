<?php 
	$paginas = ['Home','Sobre','Contato'];
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
			margin: 10px;
			color: white;
			font-size: 18px;
		}
		div.quadrado
			{
				border: solid black;
				width: 1440px;
				height: 150px;
			}
			div#q1{
				background: #A52A2A;

			}
			img{
				width: 1440px;
				height: 150px;
			}

	</style>
</head>
<body>
	<div class="quadrado" id="q1">
		<img src="Isso.jpg">
		
	</div>
	<img src="">
	<header>
			<?php
					foreach ($paginas as $key => $value) {
					echo '<a href="?page='.$key.'">'.$key.'</a>';
					}
			?>


	</header>




</body>
</html>