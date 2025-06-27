<?php
define("ANO_ATUAL", 2025); // atualize conforme o ano

if (isset($_GET['nascimento'])) {
$ano_nascimento = $_GET['nascimento'];
$idade = ANO_ATUAL - $ano_nascimento;
$dias = $idade * 365;
$idade_em_2050 = 2050 - $ano_nascimento;

echo "Ano de nascimento: $ano_nascimento
";
echo "Idade: $idade anos
";
echo "Dias vividos (aproximadamente): $dias dias
";
echo "Idade em 2050: $idade_em_2050 anos";
}
?> Informe seu ano de nascimento: <input type="number" name = "nascimento" required>
</form>