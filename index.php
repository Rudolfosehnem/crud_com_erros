<?php

include("conexao.php");

$sql = "SELECT * From usuarios";
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Usuários</h1>";

while ($linha = mysqli_fetch_array($resultado)) {
    echo "Nome: " . $linha['nome'] . "<br>";
    echo "Email: " . $linha['email'] . "<br><br>";
}
?>
<a href='cadastrar.php'>Cadastrar novo</a>