<?php
include_once "entidades/AdminApoiado.php";
$pessoa = new AdminApoiado(
    "leonardo",
    "1234",
    "ifes.lopes@gomail.com",
    1,
    "estutande de informatica",
    "teste.jpg"
);
echo "nome: " . $pessoa->getNomeCompleto();
echo " senha: " . $pessoa->getSenha();
echo " email: " . $pessoa->getEmail();
echo " amnistrador: " . $pessoa->getAdministrado();
echo " Resumo biografia: " . $pessoa->getResumoBio();
echo " Fotos: " . $pessoa->getFoto();

$pessoa->setNomeCompleto("Luis");

