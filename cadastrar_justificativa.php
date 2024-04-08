<?php
require_once('./conexao.php');

$txtNomeJustificativa = $_POST['txtNomeJustificativa'];
$txtDescricaoJustificativa = $_POST['txtDescricaoJustificativa'];

$str_sql_cadastrar_justificativa = "insert into Justificativas ('nome', 'descricao') values ('$txtNomeJustificativa', '$txtDescricacJustificativa');";

try {
$cadastrar_Jjustificativa = mysqli_query($conexao, $str_sql_cadastrar_justificativa;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Justificativa] = $ultimo_id;
die('io Justificativa:' . $_SESSION['icJustificativa ]);
} catch (Exception) {
die('Não foi possível cadastrar o Justificativa str sql: ' .$str_sql_cadastrar_justificativa);
}
?>