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
				margin: 70px 0px;
				padding: 0;
				box-sizing: border-box;
			}
			header{

				background: #B8860B;
				padding: 8px 12px;
				text-align: center;
			}
			a{
				display: inline-block;
				margin: 10px;
				color: white;
				font-size: 18;
			}
			div.quadrado{
				margin: 15px 20px;
				padding: 0;
				border: solid black;
				width: 300px;
				height: 300px;
			}
		</style>
</head>
<body>
	<div class="quadrado">
		
	</div>
	<header>


			<?php
					foreach ($paginas as $key => $value) {
					echo '<a href="?page='.$key.'">'.$key.'</a>';
					}




			?>
	</header>

</body>
</html>