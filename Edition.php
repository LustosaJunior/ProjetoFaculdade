<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>*********</title> 
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        
        <!-- CSS -->
        <link href="CSS/Edition.css" rel="stylesheet">
        <!-- JS -->
        <script src="JS/Edition.js"></script>

    </head>
    <body>
        
        <div id="area" >*********</div>
        
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
        <br>

        <div class="container">
            <br>
            <div class="panel-header">
                <h2 class="title">Edição</h2>
            </div>
            <br>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="txtNome">Nome do candidato</label>
                        <input type="text" class="form-control" name="txtNome" id="txtNome">
                    </div>
                    <div class="col-sm-4">
                        <label for="dtDateNasc">Data de nascimento</label>
                        <input type="date" class="form-control" name="dtDateNasc" id="dtDateNasc">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <label for="txtemail">E-mail</label>
                        <input type="text" onblur="validacaoEmail(this)" class="form-control" name="txtemail" id="txtemail">
                    </div>
                    <div class="col-sm-3">
                        <label for="txtTelefone">Telefone</label>
                        <input type="text" class="form-control" name="txtTelefone" id="txtTelefone">
                    </div>
                    <div class="col-sm-3">
                        <label for="txtCEP">CEP</label>
                        <input type="text" class="form-control" onblur="ViaCEP(this.value)" name="txtCEP" id="txtCEP">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <label for="txtUF">UF</label>
                        <input type="text" class="form-control" name="txtCEP txtUF" id="txtUF">
                    </div>
                    <div class="col-sm-3">
                        <label for="txtCidade">Cidade</label>
                        <input type="text" class="form-control" name="txtCidade" id="txtCidade">
                    </div> 
                    <div class="col-sm-3">
                        <label for="txtBairro">Bairro</label>
                        <input type="text" class="form-control" name="txtBairro" id="txtBairro">
                    </div>
                    <div class="col-sm-3">
                        <label for="txtLogradouro">Logradouro</label>
                        <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="txtDateNasc">Gênero</label>
                        <select name="Genero" class="form-control">
                            <option value="Masc">Masculino</option>
                            <option value="Fem" selected>Feminino</option>
                            <option value="Outer">Outro</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="txtCPF">CPF</label>
                        <input type="text" class="form-control" name="txtCPF" id="txtCPF">
                    </div>
                    <div class="col-sm-3">
                        <label for="txtArea">Área de Interesse</label>
                        <input type="text" class="form-control" name="txtArea" id="txtArea">
                    </div>
                </div>
            </div> 
            <br><br>
            <div class="panel-footer">
                <div class="container">
                    <div class="col-sm">
                        <input type="button" class="form-control" onclick="document.location.href = 'Edition.php'" id="btnCad" value="Atualizar">
                    </div>
                </div>
            </div>
            <br><br>    
        </div> 
    </body>
</html>