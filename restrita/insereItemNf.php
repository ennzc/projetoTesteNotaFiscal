<?php 
include 'conecta.php';
session_start();
$nf = $_SESSION['nf'];
$id_produto = $_POST['id_prod'];
$qtde = $_POST['qtde'];
$subtotal = $_POST['subtotal'];


echo "NF  -> ". $nf ."<br>";
echo "Id Produto -> ". $id_produto ."<br>";
echo "QTDE ->". $qtde ."<br>";
echo "Subtotal ->". $subtotal ."<br>";


$consulta = $conexao -> prepare(
	"INSERT INTO itens_nf (cod_produto, num_nf, qtde, subtotal)
	VALUES ('$id_produto', '$nf', '$qtde', '$subtotal')");
$consulta -> execute();
header('Location: confirmaItem.php');

?>
