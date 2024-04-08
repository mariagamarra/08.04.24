<?php
require_once('./GrupoDeEntrega.php');

$txtNomeGrupoDeEntrega = $_POST['txtNomeGrupoDeEntrega'];
$txtDescricaoGrupoDeEntrega = $_POST['txtDescricaoGrupoDeEntrega'];

$str_sql_cadastrar_grupo_de_entrega = "insert into GrupoDeEntregas ('nome', 'descricao') values ('$txtNomeGrupoDeEntrega', '$txtDescricacGrupoDeEntrega');";

try {
$cadastrar_grupo_de_entrega = mysqli_query($GrupoDeEntrega, $str_sql_cadastrar_grupo_de_entrega;
$ultimo_id = $GrupoDeEntrega->insert_id;
$_SESSION['ic GrupoDeEntrega] = $ultimo_id;
die('io GrupoDeEntrega:' . $_SESSION['icGrupoDeEntrega ]);
} catch (Exception) {
die('Não foi possível cadastrar o GrupoDeEntrega str sql: ' .$str_sql_cadastrar_grupo_de_entrega);
}
?>