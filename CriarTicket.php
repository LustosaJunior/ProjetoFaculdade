<?php

session_start();

//Criei um array simples para armazenar todas os dados e um array associativo com os dados de cada
$_SESSION["Tickets"][] = $Ticket = [
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

$_SESSION["TicketCriado"] = true;

header('location: Opening.php');
return;