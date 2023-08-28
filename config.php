<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tudo OK</h1>
    </header>
    <main>
        <?php 
            session_start();

            include_once("conexao.php");

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $dataNasc = $_POST["dataNasc"];

            echo "<strong>Usuario cadastrado com sucesso \u{2705}</strong><br><br><br>";
            echo "Nome: <strong>$nome</strong><br><br>";
            echo "E-mail: <strong>$email</strong><br><br>";
            echo "Telefone para contato: <strong>$tel</strong><br><br>";
            echo "Data de nascimento: <strong>$dataNasc</strong><br><br><br>";

            $result_usuarios = "INSERT INTO usuarios (nome, email, tel, dataNasc) VALUES ('$nome','$email' , '$tel' ,'$dataNasc' )";
            $resultado_usuarios =mysqli_query($conn, $result_usuarios);

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        
    </main>

</body>
</html>