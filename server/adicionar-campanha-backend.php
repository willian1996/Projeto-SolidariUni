<?php
session_start();

$id = $_SESSION['idusuario'];
$origem = $_FILES["foto_campanha"]["tmp_name"];
$titulo = isset($_POST['titulo'])?$_POST['titulo']:'';
$subtitulo = isset($_POST['subtitulo'])?$_POST['subtitulo']:'';
$descricao = isset($_POST['descricao'])?$_POST['descricao']:'';
$data_final_campanha = isset($_POST['data_final_campanha'])?$_POST['data_final_campanha']:'';


$caminho = '../upload-fotos-campanhas/';

$resultado = explode('.',$_FILES["foto"]["name"]);
$ext = end($resultado);
$nomearquivo = uniqid().'.'.$ext;
$destino = $caminho.$nomearquivo;

if($_FILES["foto"]["size"] < 1048576){
	if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif'){		
		move_uploaded_file($origem, $destino);
		$retorno['deucerto'] = true;
		$retorno['msg'] = 'Arquivo enviado com sucesso!';
		echo json_encode($retorno);
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