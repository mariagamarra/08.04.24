<?php
require_once('./conexao.php');

$txtNomeRequisito = $_POST['txtNomeRequisito'];
$txtDescricaoRequisito = $_POST['txtDescricaoRequisito'];

$str_sql_cadastrar_requisito = "insert into Requisitos ('nome', 'descricao') values ('$txtNomeRequisito', '$txtDescricacRequisito');";

try {
$cadastrar_requisito = mysqli_query($conexao, $str_sql_cadastrar_requisito;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Requisito] = $ultimo_id;
die('io Requisito:' . $_SESSION['icRequisito ]);
} catch (Exception) {
die('Não foi possível cadastrar o Requisito str sql: ' .$str_sql_cadastrar_requisito);
}
?>