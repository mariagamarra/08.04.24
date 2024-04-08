<?php
require_once('./conexao.php');

$txtNomeObjetivoSmart = $_POST['txtNomeObjetivoSmart'];
$txtDescricaoObjetivoSmart = $_POST['txtDescricaoObjetivoSmart'];

$str_sql_cadastrar_objetivo_smart = "insert into ObjetivoSmarts ('nome', 'descricao') values ('$txtNomeObjetivoSmart', '$txtDescricacObjetivoSmart');";

try {
$cadastrar_objetivo_smart = mysqli_query($conexao, $str_sql_cadastrar_objetivo_smart;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic ObjetivoSmart] = $ultimo_id;
die('io ObjetivoSmart:' . $_SESSION['icObjetivoSmart ]);
} catch (Exception) {
die('Não foi possível cadastrar o ObjetivoSmart str sql: ' .$str_sql_cadastrar_objetivo_smart);
}
?>