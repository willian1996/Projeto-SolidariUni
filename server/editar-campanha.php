<?php 
$id = $_POST['idcampanha'];
$titulo = $_POST['novotitulo'];
$subtitulo= $_POST['novosubtitulo'];
$descricao = $_POST['novadescricao'];
require 'conexao.php';
if (isset($_GET['ErrorEditar'])&& $_GET['ErrorEditar']=='true'){?>
        <div id="ErrorEditar">
           <script type="text/javascript">
            new Noty({
            type: 'error',
            layout: 'topCenter',
            theme: 'sunset',
            text: 'Ocorreu um erro para editar, tente novamente!!!'
            }).show();  
         
         </script>            
        </div>
<?php } 


try{
	$stmt = $conn->prepare(
	"UPDATE campanhas SET titulo = :titulo, subtitulo = :subtitulo, descricao = :descricao  WHERE idcampanha = :id;"
	);
    $stmt->bindParam(':id', $id);
	$stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':subtitulo', $subtitulo);
    $stmt->bindParam(':descricao', $descricao);

	$stmt->execute();
	$retorno['deucerto'] = true;
	$retorno['mensagem'] = "Parabéns! Editou!";
	echo json_encode($retorno);
	
} catch(PDOException $e){
	$retorno['deucerto'] = false;
	$retorno['mensagem'] = "Opss! Algo deu errado!";
	$retorno['error'] = $e->getMessage();
	echo json_encode($retorno);
}
?>