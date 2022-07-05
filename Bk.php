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
		</style>
		<style type="text/css">
			div.quadrado{
				margin: 10px 12px;
				padding: 0;
				border: solid black;
}










		</style>
</head>
<body>
	<div class="quadrado">
		
	</div>
	<div class="quadrado">
		
	</div>
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