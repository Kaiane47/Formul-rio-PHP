<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário PHP - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        
        <form action="" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>E-mail:</label>
            <input type="email" name="email" required>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <label>Idade:</label>
            <input type="number" name="idade">

            <label>Gênero:</label>
            <select name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>

            <label>Receber Newsletter?</label>
            <div class="radio-group">
                <input type="radio" name="news" value="Sim" checked> Sim
                <input type="radio" name="news" value="Não"> Não
            </div>

            <label>Biografia:</label>
            <textarea name="bio" rows="4"></textarea>

            <button type="submit">Enviar Dados</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Filtragem básica para evitar scripts maliciosos (XSS)
            $nome   = htmlspecialchars($_POST['nome']);
            $email  = htmlspecialchars($_POST['email']);
            $idade  = htmlspecialchars($_POST['idade']);
            $genero = htmlspecialchars($_POST['genero']);
            $news   = htmlspecialchars($_POST['news']);
            $bio    = htmlspecialchars($_POST['bio']);
            
           

            echo "<div class='resultado'>";
            echo "<h3>Dados Recebidos:</h3>";
            echo "<p><b>Nome:</b> $nome</p>";
            echo "<p><b>E-mail:</b> $email</p>";
            echo "<p><b>Senha:</b> <span style='color: gray;'>******** (Protegida)</span></p>";
            echo "<p><b>Idade:</b> $idade</p>";
            echo "<p><b>Gênero:</b> $genero</p>";
            echo "<p><b>Newsletter:</b> $news</p>";
            echo "<p><b>Bio:</b> " . nl2br($bio) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>