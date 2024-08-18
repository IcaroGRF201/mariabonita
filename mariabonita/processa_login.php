<?php
	session_start ();

	$conectar = mysqli_connect ("localhost", "root", "", "mariabonita");
	
	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];	
		
	$sql_consulta = "SELECT usuario, senha, nome,
						    idclientes
					 
					 FROM clientes
					 WHERE 
					       usuario = '$usuario' 
					 AND 
					       senha = '$senha'";
				     
					 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
	
	$linhas = mysqli_num_rows ($resultado_consulta);	
	
	if ($linhas == 1) { 
		
		$registro = mysqli_fetch_row($resultado_consulta);
		
		$_SESSION["nome"] = $registro[2];
			
		
		echo "<script> 
					location.href = ('home.php') 
			  </script>";
	}
	else {
		echo "<script> 
				  alert ('Login ou Senha Incorretos! Digite Novamente!!') 
			  </script>";
		echo "<script> location.href = ('index.php') </script>";
	}
?>