<?php
include("conexao.php");
// vai funcionar somente se eu tiver a tela em que eu add o nome do servidor
// verificar depois esta parte

if (isset($_POST['buscar'])) {
    $nome_servidor = $_POST['nome_servidor'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $tipo_de_usuario = $_POST['tipo_de_usuario'];
    $data_agendamento = $_POST['data_agendamento'];
    $horario = $_POST['horario'];
    $turno = $_POST['turno'];
    $status = $_POST['status'];

    if (empty($nome_servidor) || empty($email) || empty($tipo) || empty($data_agendamento) || 
        empty($horario) || empty($turno) || empty($status)) {
        echo "<script>alert('Por favor, preencha todos os campos.');</script>";
    } else {

        $sqlBuscarHorarios = mysqli_query($conexao, "SELECT * FROM agendamentos WHERE nome_servidor LIKE '%$nome_servidor%' AND email LIKE '%$email%' AND tipo LIKE '%$tipo%' AND data_agendamento='$data_agendamento' AND horario='$horario' AND turno='$turno' AND status='$status'")
            or die("Erro ao buscar os registros. " . mysqli_error($conexao));

        while ($row = mysqli_fetch_assoc($sqlBuscarHorarios)) {
            echo "nome_servidor: " . $row['nome_servidor'] . "<br>";
            echo "Tipo de Usuário: " . $row['tipo_de_usuario'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Tipo: " . $row['tipo'] . "<br>";
            echo "Data do Agendamento: " . $row['data_agendamento'] . "<br>";
            echo "Horário: " . $row['horario'] . "<br>";
            echo "Turno: " . $row['turno'] . "<br>";
            echo "Status: " . $row['status'] . "<br><hr>";
        }
    }
}
