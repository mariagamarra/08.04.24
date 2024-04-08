<?php
require_once('./conexao.php');

$txtNomeProduto = $_POST['txtNomeProduto'];
$txtDescricaoProduto = $_POST['txtDescricaoProduto'];

$str_sql_cadastrar_produto = "insert into Produtos ('nome', 'descricao') values ('$txtNomeProduto', '$txtDescricacProduto');";

try {
$cadastrar_produto = mysqli_query($conexao, $str_sql_cadastrar_produto;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Produto] = $ultimo_id;
die('io Produto:' . $_SESSION['icProduto ]);
} catch (Exception) {
die('Não foi possível cadastrar o Produto str sql: ' .$str_sql_cadastrar_produto);
}
?>