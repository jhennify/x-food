<!DOCTYPE html>
<html>
<head>
	<title>Atualizar</title>
	<style>

	#divCenter{
			position: relative;
			top: 300px;
			margin: 0 auto;
							width: 250px;
							height: 300px;
							background: green;
							background-color: green(0,0,0,0.6);

	}
	.formulario{
		position: absolute;
		left: 30px;
	}


	</style>
</head>
<body>
	<?php

		 include_once "conexao.php";
          if(isset($_POST['Atualizar'])){
              @$cod = $_POST['codigo'];
              @$desc = $_POST['produto'];
              @$pre = $_POST['valor'];

		$r = mysqli_query($con, "UPDATE produto SET codigo = $cod, descricao = '$desc', preco = $pre WHERE codigo = $antigo");
		if($r){
			echo "<script>alert('Atualizado com sucesso');

			location.href='listar.php';</script>";

		}else{

			echo "<script>alert('Erro ao Atualizar');

			location.href='listar.php';</script>";

				}
		}

		?>
</body>
</html>




<body>

	<div id="divCenter">
	<h1 align="center">ATUALIZAR PRODUTOS</h1>

	<form method="POST" class="formulario">
     <input type="text" name="codigo" id="codigo" size="15" value="<?php echo $_GET['cod']?>"/><br><br>
     <input type="text" name="produto" id="produto" size="15" value="<?php echo $_GET['prod']?>"/><br><br>
     <input type="text" name="valor" id="valor" size="15" value="<?php echo $_GET['val']?>"/><br><br>

     <input hidden="true" type="text" name="antigo" id="antigo" value="<?php echo $_GET['cod']?>" />

    <p><input type="submit" name="Atualizar" value="ATUALIZAR"/>
	<button><a href="listar.php">VOLTAR</a></button></p>
</body>
