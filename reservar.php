<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $espacos = $_POST['espacos'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $tipo_evento = $_POST['tipo_evento'];

    $sql = "INSERT INTO pessoas (nome, email, espacos, entrada, saida, tipo_evento) 
            VALUES ('$nome', '$email', '$espacos', '$entrada', '$saida', '$tipo_evento')";

    if ($conn->query($sql) === TRUE) {
        echo "Reserva feita com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>