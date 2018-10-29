<?php 
$email = $_POST['email'];
$senha = sha1($_POST['senha']);

require 'conexao.php';
try{
	$stmt = $conn->prepare(
	"SELECT * FROM usuarios WHERE email = :email AND senha = :senha;"
	);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

	$stmt->execute();
	
	if($stmt->rowCount() == 1){
		session_start();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['idusuario'] = $result['idusuario'];
        $_SESSION['nome'] = $result['primeiro_nome'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['senha'] = $result['senha'];
		
		$retorno['deucerto'] = true;
		$retorno['mensagem'] = "Parabéns! Logou!";
		echo json_encode($retorno);
	}else{
		$retorno['deucerto'] = false;
		$retorno['mensagem'] = "Usuário ou Senha Inválidos";
		echo json_encode($retorno);
	};
} catch(PDOException $e){
	$retorno['deucerto'] = false;
	$retorno['mensagem'] = "Opss! Algo deu errado!";
	$retorno['error'] = $e->getMessage();
	echo json_encode($retorno);
}
?>