<?php
require_once('./conexao.php');

$txtNomeCusto = $_POST['txtNomeCusto'];
$txtDescricaoCusto = $_POST['txtDescricaoCusto'];

$str_sql_cadastrar_custo = "insert into Custos ('nome', 'descricao') values ('$txtNomeCusto', '$txtDescricacCusto');";

try {
$cadastrar_Custo = mysqli_query($conexao, $str_sql_cadastrar_custo;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Custo] = $ultimo_id;
die('io Custo:' . $_SESSION['icCusto ]);
} catch (Exception) {
die('Não foi possível cadastrar o Custo str sql: ' .$str_sql_cadastrar_custo);
}
?>