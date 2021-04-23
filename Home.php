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

        <!-- DashBoard -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <!-- CSS -->
        <link href="CSS/Home.css" rel="stylesheet">
        <!-- JS -->
        <script src="JS/Home.js"></script>
        
    </head>
    <body>
        
        <div id="area" >**********</div>
        
        <nav class="menu"><!--Listas-->
        <ul>
            <li><a href="Home.html">Home</a></li>

            <li><a href="Opening.html">Abertura</a>
                
            <li><a href="Cockpit.html">Cockpit</a>

            <li><a href="TrabConosco.html">Trabalhe Conosco</a></li>

            <li><a href="Parceiros.html">Parceiros</a></li>

            <li><a href="Contato.html">Contato</a></li>
        </ul>
        </nav>
        <br>

        <div class="container">
            <br>
            <div class="panel-header">
                <h2 style="font: normal 75px italic;background: rgba(233, 81, 81, 0);color: rgb(241, 239, 239);text-align: center;">DashBoard de apresentação</h2>
            </div>
            <br>

            <figure class="highcharts-figure">
                <div id="container"></div>
            </figure>
        </div>
    </body>
</html>