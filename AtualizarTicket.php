<?php

session_start();

$hdnTicket = $_GET["hdnTicket"];

//Criei um array simples para armazenar todas os dados e um array associativo com os dados de cada
$_SESSION["Tickets"][$hdnTicket] = $Ticket = [
    'txtNome' => $_GET["txtNome"],
    'dtDateNasc' => $_GET["dtDateNasc"],
    'txtemail' => $_GET["txtemail"],
    'txtTelefone' => $_GET["txtTelefone"],
    'txtCEP' => $_GET["txtCEP"],
    'txtUF' => $_GET["txtUF"],
    'txtCidade' => $_GET["txtCidade"],
    'txtBairro' => $_GET["txtBairro"],
    'txtLogradouro' => $_GET["txtLogradouro"],
    'Genero' => $_GET["slcGenero"],
    'txtCPF' => $_GET["txtCPF"],
    'txtArea' => $_GET["txtArea"]
];

$_SESSION["TicketAtualizado"] = true;

header('location: Edition.php?Ticket='.$hdnTicket);
return;