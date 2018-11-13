<?php
session_start();

$id = $_SESSION['idusuario'];
$origem = $_FILES["foto"]["tmp_name"];



$caminho = '../upload-fotos-perfiluser/';

$resultado = explode('.',$_FILES["foto"]["name"]);
$ext = end($resultado);
$nomearquivo = uniqid().'.'.$ext;
$destino = $caminho.$nomearquivo;

if($_FILES["foto"]["size"] < 1048576){
	if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif'){		
		move_uploaded_file($origem, $destino);
        //-----------------------------------
        require_once 'conexao.php';

        try{
            $stmt = $conn->prepare("UPDATE usuarios SET foto_perfil = :foto_perfil WHERE idusuario = :idusuario;");

            $stmt->bindParam(':idusuario', $id);
            $stmt->bindParam(':foto_perfil', $nomearquivo);
            
           
           

            $stmt->execute();
            
            $_SESSION['foto_perfil'] = $nomearquivo;
            
            $retorno['deucerto'] = true;
            $retorno['msg'] = 'Foto Atualizada com sucesso!';
            echo json_encode($retorno);
            
            }catch(PDOException $e){
                $retorno['deucerto'] = false;
                $retorno['mensagem'] = "Opss! Erro no servidor!";
                $retorno['error'] = $e->getMessage();
                echo json_encode($retorno);
                
    
            }
        //-----------------------------------
		
        
	}else{
		$retorno['deucerto'] = false;
		$retorno['msg'] = 'Formato Inválido!';
		echo json_encode($retorno);
	}
}else{
	$retorno['deucerto'] = false;
	$retorno['msg'] = 'Arquivo muito grande!';
	echo json_encode($retorno);
}

?>