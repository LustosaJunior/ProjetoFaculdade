<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de Contato</title>
        
        <!-- CSS -->
        <link href="CSS/Contato.css" rel="stylesheet">
        <!-- JS -->
        <script src="JS/Contato.js"></script>
        
    </head>
    <body> 
        <br>
        <nav class="menu"><!--Listas-->
            <ul>
                <li><a href="Home.php">Home</a></li>

                <li><a href="Opening.php">Abertura</a>

                <li><a href="Cockpit.php">Cockpit</a>

                <li><a href="TrabConosco.php">Trabalhe Conosco</a></li>

                <li><a href="Parceiros.php">Parceiros</a></li>

                <li><a href="Contato.php">Contato</a></li>
            </ul>
        </nav>
        <br><br>
        <fieldset>
            <legend><h2>Formulário de Contato</h2></legend>
            <form name="formuser" action="Enviado.php" >
                <!--required faz a validação-->
                Nome:<input type="text" name="nome" placeholder="Digite seu nome" required ><br><br>
                Sexo:<br>
                    <input type="radio" name="sexo" value="M">Masculino
                    <input type="radio" name="sexo" value="F">Feminino
                    <input type="radio" name="sexo" value="Outro">Outro
                    <input type="radio" name="sexo" value="Não deseja informar">Não deseja informar
                    <p>
                Informe seu telefone: <input type="tel" name="telefone" placeholder="(12) 4567-8910" required> 
                <p>
                E-mail:<input type="email" name="email" placeholder="Digite seu e-mail" ><br><br>
                Assunto:<input type="text" name="assunto" placeholder="Digite seu nome" required ><br><br>
                Mensagem:<br>
                <textarea name="mensagem" id="msg" cols="30" rows="3" placeholder="Digite sua mensagem"></textarea><br><br>
                Deseja receber informações por:<br>
                <input type="checkbox" name="email" checked>E-mail
                <input type="checkbox" name="fone" checked>Telefone
                <input type="checkbox" name="correio" checked>Correio
                <p>
                Dê uma nota para nossos serviços: 0<input type="range" name="satisfacao" min="1" max="10">10
                <p>
                <input type="submit">
            </form>
        </fieldset>
    </body>
</html>