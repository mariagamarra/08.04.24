
<?php
require_once('./conexao.php');

$txtNomeStakeholder = $_POST['txtNomeStakeholder'];
$txtDescricaoStakeholder = $_POST['txtDescricaoStakeholder'];

$str_sql_cadastrar_stakeholder = "insert into Stakeholders ('nome', 'descricao') values ('$txtNomeStakeholder', '$txtDescricacStakeholder');";

try {
$cadastrar_stakeholder = mysqli_query($conexao, $str_sql_cadastrar_stakeholder;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Stakeholder] = $ultimo_id;
die('io Stakeholder:' . $_SESSION['icStakeholder ]);
} catch (Exception) {
die('Não foi possível cadastrar o Stakeholder str sql: ' .$str_sql_cadastrar_stakeholder);
}
?>