// Exemplo de consulta SQL
$sql = "SELECT * FROM formulariofortetrator";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    // Iterar sobre os resultados
    while($row = $result->fetch()) {
        echo "Nome: " . $row["nome"]. " - Tipo: " . $row["tipo"]. "<br>";
    }
} else {
    echo "0 resultados";
}
