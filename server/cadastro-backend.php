<?php

$primeiro_nome = isset($_POST['primeiro_nome'])?$_POST['primeiro_nome']:'';
$sobrenome = isset($_POST['sobrenome'])?$_POST['sobrenome']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$senha = isset($_POST['senha'])?$_POST['senha']:'';
$senha = sha1($senha);
$CPF = isset($_POST['CPF'])?$_POST['CPF']:'';
$tipo_pessoa = isset($_POST['tipo_pessoa'])?$_POST['tipo_pessoa']:'';
$telefone = isset($_POST['telefone'])?$_POST['telefone']:'';
$data_nascimento = isset($_POST['data_nascimento'])?$_POST['data_nascimento']:'';
$CNPJ = isset($_POST['CNPJ'])?$_POST['CNPJ']:'';
$razao_social = isset($_POST['razao_social'])?$_POST['razao_social']:'';
$tipo_pessoa = isset($_POST['tipo_pessoa'])?$_POST['tipo_pessoa']:'';

require_once 'conexao.php';

try{
    $stmt = $conn->prepare("INSERT usuarios (primeiro_nome, sobrenome, email, senha, CPF, telefone, data_nascimento, CNPJ, razao_social, tipo_pessoa) 
    VALUES (:primeiro_nome, :sobrenome, :email, :senha, :CPF, :telefone, :data_nascimento, :CNPJ, :razao_social, :tipo_pessoa)"
    );
    
    $stmt->bindParam(':primeiro_nome', $primeiro_nome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':CPF', $CPF);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':tipo_pessoa', $tipo_pessoa);
    $stmt->bindParam(':data_nascimento', $data_nascimento);
    $stmt->bindParam(':razao_social', $razao_social);
    $stmt->bindParam(':CNPJ', $CNPJ);
    $stmt->bindParam(':tipo_pessoa', $tipo_pessoa);
    
    $stmt->execute();
    header('Location: ../index.php?sucessoCadastro=true');
    
}catch(PDOException $e){
    header('location:../index.php?erroCadastro=true');
    
}

?>




