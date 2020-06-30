<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false != true);
var_dump(false != false);


echo "<p class='divisao'>Exemplos</p><hr>";
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');
echo '<br>';
$idade = 62;
$sexo = 'F';

$previdencia = true;
$aposentar = $previdencia && (($idade >= 60 && $sexo === 'F') || ($idade >= 65 && $sexo === 'M'));
echo "Pode se aposentar -> $aposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

?>