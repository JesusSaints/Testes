	<?php
		$paginas = ['Home'=>'','Sobre'=>'','Conato'=>''];
		$pagevrt = ['Jesus'=>'','Santo'=>'Rei',''=>'Senhor','Perfeito'=>'','Deus'=>''];

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
		padding: 0px 7px;
		text-align: center;
		position: relative;
		bottom: 4px;
	}
		a{
			display: inline-block;
			margin: 10px;
			color: white;
			font-size: 18px;
		}
		div.quadrado
			{
				//border: solid black;
				//width: 1440px;
				//height: 150px;
			}
			div#q1{
				//background: #A52A2A;

			}
			img{
			width: 100%;
			height: 151px;
	</style>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		header{
			background: #363636;
			padding: 80px 100px;
			text-align: left;
		}
		a{
			margin: 0 10px;
			color: white;
			font-size: 18px;
		} h

	</style>
		
</head>
<body>
	<div class="quadrado" id="q1">
		<img src="Imagens/Bn.png">
		
	</div>
	<section>
	   <header>
			<?php
					foreach ($paginas as $key => $value) {
					echo '<a href="?page='.$key.'">'.$key.'</a>';
					}

			 ?>
    
	   </header>
  </section>
<section>
	<header>
			<?php 
				foreach ($pagevrt as $key => $value) {
				echo '<li><a href="?page='.$key.'">'.$key'</a>;
				}

			?>
	</header>
</section>


</body>
</html>