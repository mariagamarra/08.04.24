<?php
require_once('./conexao.php');

$txtNomePremissa= $_POST['txtNomePremissa'];
$txtDescricaoPremissa = $_POST['txtDescricaoPremissa'];

$str_sql_cadastrar_premissa = "insert into Premissas ('nome', 'descricao') values ('$txtNomePremissa', '$txtDescricacPremissa');";

try {
$cadastrar_premissa = mysqli_query($conexao, $str_sql_cadastrar_premissa;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Premissa] = $ultimo_id;
die('io Premissa:' . $_SESSION['icPremissa ]);
} catch (Exception) {
die('Não foi possível cadastrar o Premissa str sql: ' .$str_sql_cadastrar_premissa);
}
?>