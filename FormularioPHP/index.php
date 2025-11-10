<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nome = $_GET['nome'] ?? '';
        $senha = $_GET['senha'] ?? '' ;
    ?>



    <main>
        <h1>Welcome Guys</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome" id="nome" required >
            <label for="senha">Digite sua senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha" id="senha" required min="8">
            <input type="submit" value="Enviar">
        </form>     
    </main>

    <section id="res">
        <?php 
            if (!empty($nome)) {
            echo "<p>Hello $nome, welcome to our website!</p>";
        }

        ?>

    </section>

</body>
</html>