<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Giusoft</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulário PHP</h1>
    </header>
    <section>
        <form action="config.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required>
            <label for="tel">Telefone</label>
            <input type="tel" name="tel" id="tel">
            <label for="date">Data de Nascimento</label>
            <input type="date" name="dataNasc" id="dataNasc" required>
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>