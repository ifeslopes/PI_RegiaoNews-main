<?php
include_once "entidades/AdminApoiado.php";
include_once "entidades/Noticias.php";
$pessoa = new AdminApoiado(
    "leonardo",
    "1234",
    "ifes.lopes@gomail.com",
    1,
    "estutande de informatica",
    "teste.jpg"
);
$noticia = new Noticias(
    "primeira notica",
    "primeria",
    "texto completo do primiro",
    "foto.jpg",
    "1/12/2021",
    1
);

echo "nome: " . $pessoa->getNomeCompleto();
echo " senha: " . $pessoa->getSenha();
echo " email: " . $pessoa->getEmail();
echo " amnistrador: " . $pessoa->getAdministrado();
echo " Resumo biografia: " . $pessoa->getResumoBio();
echo " Fotos: " . $pessoa->getFoto();
echo "<br>";

echo "titulo: " . $noticia->getTitulo();
echo " texto dest: " . $noticia->getTextoDestaque();
echo " textoComple: " . $noticia->getTextoCompleto();
echo " foto: " . $noticia->getFoto();
echo " data: " . $noticia->getData();
echo " iddoaltor: " . $noticia->getIdadminApioadoFK();
echo "<br>";

$pessoa->setNomeCompleto("Luis");
$noticia->setTitulo("Novo titulo");
echo "nome:" . $pessoa->getNomeCompleto();
echo "<br>";
echo "Titulo: " . $noticia->getTitulo();
