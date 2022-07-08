<?php
		$paginas = ['Home','Sobre','Contato']
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
				background: #363636;
				padding: 3px 7px;
				text-align: center;
			}
			a{
				display: inline-block;
				margin: 0 10px;
				color: white;
				font-size: 18px;
			}
			div.retangolo{
				width: 100%;
				height: 150px;
			}
	</style>
</head>
<body>
		<div class="retangulo" id="r1">
			<img src="Imagens/Ts.png" width="100%" height="100%">
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