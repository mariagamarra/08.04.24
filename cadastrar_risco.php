
<?php
require_once('./conexao.php');

$txtNomeRisco = $_POST['txtNomeRisco'];
$txtDescricaoRisco = $_POST['txtDescricaoRisco'];

$str_sql_cadastrar_risco = "insert into Riscos ('nome', 'descricao') values ('$txtNomeRisco', '$txtDescricacRisco');";

try {
$cadastrar_eisco = mysqli_query($conexao, $str_sql_cadastrar_risco;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Risco] = $ultimo_id;
die('io Risco:' . $_SESSION['icRisco ]);
} catch (Exception) {
die('Não foi possível cadastrar o Risco str sql: ' .$str_sql_cadastrar_risco);
}
?>