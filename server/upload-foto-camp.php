<?php
session_start();

$id = $_POST['idcampanha'];
$origem = $_FILES["foto"]["tmp_name"];



$caminho = '../upload-fotos-campanhas/';

$resultado = explode('.',$_FILES["foto"]["name"]);
$ext = end($resultado);
$nomearquivo = uniqid().'.'.$ext;
$destino = $caminho.$nomearquivo;

if($_FILES["foto"]["size"] < 4194304){
	if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif'){		
		move_uploaded_file($origem, $destino);
        //-----------------------------------
        require_once 'conexao.php';

        try{
            $stmt = $conn->prepare("UPDATE campanhas SET foto_campanha = :foto_campanha WHERE idcampanha = :idcampanha;");

            $stmt->bindParam(':idcampanha', $id);
            $stmt->bindParam(':foto_campanha', $nomearquivo);
            
           
           

            $stmt->execute();
            
            
            
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