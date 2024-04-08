<?php
require_once('./conexao.php');

$txtNomeBeneficio = $_POST['txtNomeBeneficio'];
$txtDescricaoBeneficio = $_POST['txtDescricaoBeneficio'];

$str_sql_cadastrar_Beneficio = "insert into Beneficios ('nome', 'descricao') values ('$txtNomeBeneficio', '$txtDescricacBeneficio');";

try {
$cadastrar_Beneficio = mysqli_query($conexao, $str_sql_cadastrar_beneficio;
$ultimo_id = $conexao->insert_id;
$_SESSION['ic Beneficio] = $ultimo_id;
die('io Beneficio:' . $_SESSION['icBeneficio ]);
} catch (Exception) {
die('Não foi possível cadastrar o Beneficio str sql: ' .$str_sql_cadastrar_beneficio);
}
?>