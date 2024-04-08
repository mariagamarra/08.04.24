<?php
require_once('./conexao.php');

$txtNomeLinhaDoTempo = $_POST['txtNomeLinhaDoTempo'];
$txtDescricaoLinhaDoTempo = $_POST['txtDescricaoLinhaDoTempo'];

$str_sql_cadastrar_linha_do_tempo = "insert into LinhaDoTempos ('nome', 'descricao') values ('$txtNomeLinhaDoTempo', '$txtDescricacLinhaDoTempo');";

try {
$cadastrar_linha_do_tempo = mysqli_query($conexao, $str_sql_cadastrar_linha_do_tempo;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic LinhaDoTempo] = $ultimo_id;
die('io LinhaDoTempo:' . $_SESSION['icLinhaDoTempo ]);
} catch (Exception) {
die('Não foi possível cadastrar o LinhaDoTempo str sql: ' .$str_sql_cadastrar_linha_do_tempo);
}
?>