<?php
interface InterfaceCrud
{
    public function salvar(Noticias $objt);
    public function listar();
    public function listarID($id);
    public function editar(Noticias $nosticias,$id);
    public function deletar($id);
}
?>
