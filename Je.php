<?php
		$paginas = ['Jesus'=>'Salvador','Home'=>'Eterno','Contato'=>'Senhor']



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
			background:#B8860B;
			padding: 15px 20px;
			text-align: center;
		}
		a{
			display: inline-block;
			margin: 0 15px;
			color: white;
			font-size: 30px;




		}



	</style>t

</head>
<body>
	<header>
	<?php
		foreach ($paginas as $key => $value) {
			'<a href="?page='.$key.'">'.$key.'</a>';
		}
?>
	
</header>


</body>
</html>