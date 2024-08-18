<?php
	// 1. Estabelecer uma conex�o com o BD
	$conectar = mysqli_connect ("localhost", "root", "", "mariabonita");
	
//2. Receber o nome, a fun��o, login e senha
	$nome = $_POST["nome"];	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

//3. Pesquisar no banco de dados se j� existe o login que foi recebido acima
	$sql_consulta = "SELECT usuario FROM clientes 
					 WHERE usuario = '$usuario'";
							 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
		
	$linhas = mysqli_num_rows ($resultado_consulta);		
		
	if ($linhas == 1) {
	
		echo "<script> 
					alert ('Nome de usuário já cadastrado. Tente outro!') 
		      </script>";
			  
		echo "<script> 
					location.href = ('index.php') 
			  </script>";			
	}
	else { //Para o usuario que n�o existe	
		$sql_cadastrar = "INSERT INTO clientes 
									  (nome,usuario, 
									  senha) 
									  
						  VALUES 
									 ('$nome','$usuario',
									 '$senha')";
									 
		$resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
		
		if ($resultado_cadastrar == true) { 		
			echo "<script> 
					alert ('Usuario cadastrado com sucesso') 
				  </script>";
			
			echo "<script> 
					location.href = ('index.php') 
				  </script>";	
		}
		else { 		
			echo "<script> 
					alert ('ocorreu um erro no servidor. Tente de novo') 
			     </script>";
		
			echo "<script> 
					location.href = ('index.php') 
				  </script>";		
		}	
	}
?>