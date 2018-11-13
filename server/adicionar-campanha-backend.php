<?php
session_start();

$id = $_SESSION['idusuario'];
$origem = $_FILES["foto"]["tmp_name"];
$titulo = isset($_POST['titulo'])?$_POST['titulo']:'';
$subtitulo = isset($_POST['subtitulo'])?$_POST['subtitulo']:'';
$descricao = isset($_POST['descricao'])?$_POST['descricao']:'';
$data_inicio_campanha = date("Y-m-d");
$data_final_campanha = isset($_POST['data_final_campanha'])?$_POST['data_final_campanha']:'';
$titular = $_SESSION['nome'];
$telefone_titular = $_SESSION['telefone'];
$email_titular = $_SESSION['email'];


$caminho = '../upload-fotos-campanhas/';

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
            $stmt = $conn->prepare("INSERT campanhas (titulo, subtitulo, descricao, data_inicio_campanha, data_final_campanha, titular, foto_campanha, telefone_titular, email_titular) 
            VALUES (:titulo, :subtitulo, :descricao, :data_inicio_campanha, :data_final_campanha, :titular, :foto_campanha, :telefone_titular, :email_titular)"
            );

            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':subtitulo', $subtitulo);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':data_inicio_campanha', $data_inicio_campanha);
            $stmt->bindParam(':data_final_campanha', $data_final_campanha);
            $stmt->bindParam(':titular', $titular);
            $stmt->bindParam(':foto_campanha', $nomearquivo);
            $stmt->bindParam(':telefone_titular', $telefone_titular);
            $stmt->bindParam(':email_titular', $email_titular);
           

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