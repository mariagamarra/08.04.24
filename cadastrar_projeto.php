<?php
require_once('./conexao.php');

$txtNomeProjeto = $_POST['txtNomeProjeto'];
$txtDescricaoProjeto = $_POST['txtDescricaoProjeto'];

$str_sql_cadastrar_projeto = "insert into projetos ('nome', 'descricao') values ('$txtNomeProjeto', '$txtDescricacProjeto');";

try {
$cadastrar_projeto = mysqli_query($conexao, $str_sql_cadastrar_projeto;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Projeto] = $ultimo_id;
die('io Projeto:' . $_SESSION['icProjeto ]);
} catch (Exception) {
die('Não foi possível cadastrar o projeto str sql: ' .$str_sql_cadastrar_projeto);
}
?>