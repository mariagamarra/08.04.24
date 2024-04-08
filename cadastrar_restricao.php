<?php
require_once('./conexao.php');

$txtNomeRestricao = $_POST['txtNomeRestricao'];
$txtDescricaoRestricao = $_POST['txtDescricaoRestricao'];

$str_sql_cadastrar_restricao = "insert into Restricaos ('nome', 'descricao') values ('$txtNomeRestricao', '$txtDescricacRestricao');";

try {
$cadastrar_restricao = mysqli_query($conexao, $str_sql_cadastrar_restricao;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Restricao] = $ultimo_id;
die('io Restricao:' . $_SESSION['icRestricao ]);
} catch (Exception) {
die('Não foi possível cadastrar o Restricao str sql: ' .$str_sql_cadastrar_restricao);
}
?>