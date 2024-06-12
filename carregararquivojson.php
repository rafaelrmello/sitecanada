<?php
// Caminho do arquivo JSON
$jsonFilePath = 'comentarios.json';

// Ler o conteúdo do arquivo JSON
$jsonData = file_get_contents($jsonFilePath);

// Decodificar o JSON para um array associativo
$dataArray = json_decode($jsonData, true);

// Verificar se a decodificação foi bem-sucedida
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Erro ao decodificar JSON: ' . json_last_error_msg());
}


$conexao = new PDO('mysql:host=127.0.0.1;dbname=sitecanada', 'root', '');



// Preparar e executar as inserções
foreach ($dataArray as $data) {
    // Ajuste os nomes das colunas e os dados de acordo com sua tabela
    $sql = "INSERT INTO comentario (email, comentario) VALUES (?, ?)";
    
    
    // Substitua os valores pelos dados do seu array
    $stmt->bind_param('ss', $data['email'], $data['comentario']);
    
    if ($stmt->execute() === false) {
        echo 'Erro ao executar a consulta: ' . $stmt->error . "\n";
    } else {
        echo "Registro inserido com sucesso.\n";
    }
    
    $stmt->close();
}

// Fechar a conexão
$conn->close();
?>
