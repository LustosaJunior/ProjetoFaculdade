<?php
    session_start();

    //regra para atualização do ticket
    if(isset($_SESSION["TicketAtualizado"]) and $_SESSION["TicketAtualizado"] == true){
        echo "<script>alert('Ticket atualizado com sucesso!')</script>";

        $_SESSION["TicketAtualizado"] = false;
    }
?>

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

        <form id="formEdicao" name="formEdicao" action="AtualizarTicket.php" method="get">
            <input type="hidden" class="form-control" name="hdnTicket" id="hdnTicket" value="<?php echo $_GET["Ticket"] ?>">
            
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
                            <input type="text" onblur="ValidacaoCampos()" class="form-control Validacao" name="txtNome" id="txtNome" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtNome"] ?>">
                        </div>
                        <div class="col-sm-4">
                            <label for="dtDateNasc">Data de nascimento</label>
                            <input type="date" onblur="ValidacaoCampos()" class="form-control" name="dtDateNasc" id="dtDateNasc" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["dtDateNasc"] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="txtemail">E-mail</label>
                            <input type="text" onblur="validacaoEmail(this); ValidacaoCampos()" class="form-control Validacao" name="txtemail" id="txtemail" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtemail"] ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="txtTelefone">Telefone</label>
                            <input type="text" onblur="ValidacaoCampos()" class="form-control Validacao" name="txtTelefone" id="txtTelefone" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtTelefone"] ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="txtCEP">CEP</label>
                            <input type="text" class="form-control Validacao" onblur="ViaCEP(this.value);ValidacaoCampos()" name="txtCEP" id="txtCEP" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtCEP"] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="txtUF">UF</label>
                            <input type="text" onblur="ValidacaoCampos()" class="form-control Validacao" name="txtUF" id="txtUF" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtUF"] ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="txtCidade">Cidade</label>
                            <input type="text" onblur="ValidacaoCampos()" class="form-control Validacao" name="txtCidade" id="txtCidade" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtCidade"] ?>">
                        </div> 
                        <div class="col-sm-3">
                            <label for="txtBairro">Bairro</label>
                            <input type="text" onblur="ValidacaoCampos()" class="form-control Validacao" name="txtBairro" id="txtBairro" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtBairro"] ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="txtLogradouro">Logradouro</label>
                            <input type="text" onblur="ValidacaoCampos()" class="form-control Validacao" name="txtLogradouro" id="txtLogradouro" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtLogradouro"] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="txtDateNasc">Gênero</label>
                            <select name="slcGenero" id="slcGenero" class="form-control">

                                <?php
                                    $Genero = $_SESSION["Tickets"][$_GET["Ticket"]]["Genero"];
                                    if($Genero == "Masc"){
                                        echo "
                                            <option value='Masc' selected>Masculino</option>
                                            <option value='Fem'>Feminino</option>
                                            <option value='Outer'>Outro</option>
                                        ";
                                    }elseif($Genero == "Fem"){
                                        echo "
                                            <option value='Masc'>Masculino</option>
                                            <option value='Fem' selected>Feminino</option>
                                            <option value='Outer'>Outro</option>
                                        ";
                                    }else{
                                        echo "
                                            <option value='Masc' selected>Masculino</option>
                                            <option value='Fem'>Feminino</option>
                                            <option value='Outer' selected>Outro</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="txtCPF">CPF</label>
                            <input type="text" class="form-control Validacao" onblur="ValidaCPF(); ValidacaoCampos()" name="txtCPF" id="txtCPF" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtCPF"] ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="txtArea">Área de Interesse</label>
                            <input type="text" class="form-control Validacao" onblur="ValidacaoCampos()" name="txtArea" id="txtArea" value="<?php echo $_SESSION["Tickets"][$_GET["Ticket"]]["txtArea"] ?>">
                        </div>
                    </div>
                </div> 
                <br><br>
                <div class="panel-footer">
                    <div class="container">
                        <div class="col-sm">
                            <input type="button" class="form-control" onclick="Atualiza()" id="btnAtualiza" name="btnAtualiza" value="Atualizar">
                        </div>
                    </div>
                </div>
                <br><br>    
            </div>
        </form>
    </body>
</html>