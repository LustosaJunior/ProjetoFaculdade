<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>********</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <!-- DataTable --> 
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

        <!-- CSS -->
        <link href="CSS/Cockpit.css" rel="stylesheet">

        <!-- JS -->
        <script src="JS/Cockpit.js"></script>
        
    </head>
    <body>
        
        <div id="area" >**********</div>
        
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
                <h2 class="title">Cockpit</h2>
            </div>
            <br>

            <div class="panel-body">
                <div class="row"> 
                    <div class="col-sm-4">
                        <label for="txtNome">Nome do candidato</label>
                        <input type="text" class="form-control" name="txtNome" id="txtNome">
                    </div>
                    <div class="col-sm-3">
                        <label for="txtArea">Area de Interesse</label>
                        <input type="text" class="form-control" name="txtArea" id="txtArea">
                    </div>
                    <div class="col-sm-2">
                        <label for="txtUF">UF</label>
                        <input type="text" class="form-control" name="txtUF" id="txtUF">
                    </div>
                    <div class="col-sm-3">
                        <label for="txtCidade">Cidade</label>
                        <input type="text" class="form-control" name="txtCidade" id="txtCidade">
                    </div> 
                </div>
                <br><br>   

                <table id="TableCVs" class="display" style="text-align: center">
                    <thead>
                        <tr>
                            <th>Nome do candidato</th>
                            <th>Área de Interesse</th>
                            <th>UF</th>
                            <th>Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            session_start();  

                            for($i = 0; $i < count($_SESSION['Tickets']); $i++){
                                $txtNome = $_SESSION['Tickets'][$i]["txtNome"];
                                $txtArea = $_SESSION['Tickets'][$i]["txtArea"];
                                $txtUF = $_SESSION['Tickets'][$i]["txtUF"];
                                $txtCidade = $_SESSION['Tickets'][$i]["txtCidade"];
                                
                                echo "
                                    <tr onclick='EdicaoDoTicket(".$i.")'>
                                        <td>".$txtNome."</td>
                                        <td>".$txtArea."</td>
                                        <td>".$txtUF."</td>
                                        <td>".$txtCidade."</td>
                                    </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>

            </div> 
            <br><br>
            <div class="panel-footer">
                <div class="container">
                    <div class="col-sm">
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>