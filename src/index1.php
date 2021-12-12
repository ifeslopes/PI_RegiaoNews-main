<?php
include_once "entidades/AdminApoiado.php";
include_once "entidades/Noticias.php";
include_once "servicos/ServicoNoticia.php";

$pessoa = new AdminApoiado(
    "leonardo por exten",
    "89574",
    "ifes123.lopes@gomail.com",
    0,
    "estutande de informatica",
    "teste.jpg"
);
$noticia = new Noticias(
    "primeira notica de extenção",
    "primeria classe",
    "texto completo do primiro testando classe",
    "foto231.jpg",
    date("Y-m-d"),
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

$servico = new ServicoNoticia();
$oi;
//$servico->salvar($noticia);
$servico->listar($oi);
//$noticia->setTitulo("Novo titulo Classe tesetetetetete");
//$servico->editar($noticia, 5);
$servico->deletar(5);
echo "<br>atulaziado!";
$servico->listar($oi);
/*$pessoa->setNomeCompleto("JULIOANA");
$noticia->setTitulo("Novo titulo");
echo "nome:" . $pessoa->getNomeCompleto();
echo "<br>";
echo "Titulo: " . $noticia->getTitulo() . "<br>";
$id = "ifes.lopes@gmail.com";
$ni = 4;
$noticia->deletar($ni);
//echo "<br>RETURNO:" . $pessoa->listar($id);
//$pessoa->deletar(7);
//echo "<br>ATUALIZADO:" . $pessoa->editar($id);
//echo "nome: " . $pessoa->getNomeCompleto();
*/
?>
