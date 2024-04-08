<?php
require_once('./conexao.php');

$txtNomeEquipe = $_POST['txtNomeEquipe'];
$txtDescricaoEquipe = $_POST['txtDescricaoEquipe'];

$str_sql_cadastrar_equipe = "insert into Equipes ('nome', 'descricao') values ('$txtNomeEquipe', '$txtDescricacEquipe');";

try {
$cadastrar_Equipe = mysqli_query($conexao, $str_sql_cadastrar_equipe;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Equipe] = $ultimo_id;
die('io Equipe:' . $_SESSION['icEquipe ]);
} catch (Exception) {
die('Não foi possível cadastrar o Equipe str sql: ' .$str_sql_cadastrar_equipe);
}
?>