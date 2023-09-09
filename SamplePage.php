<?php
include "../inc/dbinfo.inc";

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

$database = mysqli_select_db($connection, DB_DATABASE);

VerifyAlunosTable($connection, DB_DATABASE);

if (isset($_POST['ra']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['turma']) && isset($_POST['notebook_id'])) {
    $ra = mysqli_real_escape_string($connection, $_POST['ra']);
    $nome = mysqli_real_escape_string($connection, $_POST['nome']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $telefone = mysqli_real_escape_string($connection, $_POST['telefone']);
    $data = mysqli_real_escape_string($connection, $_POST['data']);
    $hora = mysqli_real_escape_string($connection, $_POST['hora']);
    $turma = mysqli_real_escape_string($connection, $_POST['turma']);
    $notebook_id = mysqli_real_escape_string($connection, $_POST['notebook_id']);

    AddAluno($connection, $ra, $nome, $email, $telefone, $data, $hora, $turma, $notebook_id);
}

if (isset($_GET['delete_id'])) {
  $delete_id = mysqli_real_escape_string($connection, $_GET['delete_id']);
  DeleteAluno($connection, $delete_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro empréstimo de notebooks: Inteli</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }
        
        h1 {
            color: #333;
        }
        
        #aluno-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        #aluno-list {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table, th, td {
            border: 1px solid #ccc;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Registro empréstimo de notebooks: Inteli</h1>
    <form id="aluno-form" method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
        <input type="text" name="ra" placeholder="RA do Aluno" required>
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="telefone" placeholder="Telefone" required>
        <input type="date" name="data" placeholder="Data" required>
        <input type="time" name="hora" placeholder="Hora" required>
        <input type="text" name="turma" placeholder="Turma" required>
        <input type="number" name="notebook_id" placeholder="ID do Notebook" required>
        <button type="submit" id="submit-button">Registrar</button>
    </form>
    <div id="aluno-list">
        <h2>Lista de Alunos</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>RA do Aluno</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Turma</th>
                <th>ID do Notebook</th>
                <th>Ação</th>
            </tr>

            <?php
            $result = mysqli_query($connection, "SELECT * FROM ALUNOS");

            while ($query_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>", $query_data['ID'], "</td>",
                "<td>", $query_data['RA'], "</td>",
                "<td>", $query_data['Nome'], "</td>",
                "<td>", $query_data['Email'], "</td>",
                "<td>", $query_data['Telefone'], "</td>",
                "<td>", $query_data['Data'], "</td>",
                "<td>", $query_data['Hora'], "</td>",
                "<td>", $query_data['Turma'], "</td>",
                "<td>", $query_data['NotebookID'], "</td>";
                echo "<td><a href=\"?delete_id=", $query_data['ID'], "\">Excluir</a></td>";
                echo "</tr>";
            }
            ?>

        </table>
    </div>
</body>
</html>

<?php
function AddAluno($connection, $ra, $nome, $email, $telefone, $data, $hora, $turma, $notebook_id) {
    $ra = mysqli_real_escape_string($connection, $ra);
    $nome = mysqli_real_escape_string($connection, $nome);
    $email = mysqli_real_escape_string($connection, $email);
    $telefone = mysqli_real_escape_string($connection, $telefone);
    $data = mysqli_real_escape_string($connection, $data);
    $hora = mysqli_real_escape_string($connection, $hora);
    $turma = mysqli_real_escape_string($connection, $turma);
    $notebook_id = mysqli_real_escape_string($connection, $notebook_id);

    $query = "INSERT INTO ALUNOS (RA, Nome, Email, Telefone, Data, Hora, Turma, NotebookID) VALUES ('$ra', '$nome', '$email', '$telefone', '$data', '$hora', '$turma', '$notebook_id');";

    if (!mysqli_query($connection, $query)) {
        echo("<p>Error adding student data.</p>");
    }
}

function DeleteAluno($connection, $id) {
  $id = mysqli_real_escape_string($connection, $id);
  $query = "DELETE FROM ALUNOS WHERE ID = '$id'";
  
  if (!mysqli_query($connection, $query)) {
      echo("<p>Error deleting student data.</p>");
  }
}

function VerifyAlunosTable($connection, $dbName) {
    if (!TableExists("ALUNOS", $connection, $dbName)) {
        $query = "CREATE TABLE ALUNOS (
            ID INT AUTO_INCREMENT PRIMARY KEY,
            RA VARCHAR(10),
            Nome VARCHAR(100),
            Email VARCHAR(100),
            Telefone VARCHAR(15),
            Data DATE,
            Hora TIME,
            Turma VARCHAR(50),
            NotebookID INT
        )";

        if (!mysqli_query($connection, $query)) {
            echo("<p>Error creating table.</p>");
        }
    }
}

function TableExists($tableName, $connection, $dbName) {
    $tableName = mysqli_real_escape_string($connection, $tableName);
    $dbName = mysqli_real_escape_string($connection, $dbName);

    $checktable = mysqli_query($connection,
        "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_NAME = '$tableName' AND TABLE_SCHEMA = '$dbName'");

    return mysqli_num_rows($checktable) > 0;
}
?>
