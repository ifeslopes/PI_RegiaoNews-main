<?php
interface InterfaceCrud
{
    public function salvar($objt);
    public function listar();
    public function listarID($id);
    public function editar( $nosticias,$id);
    public function deletar($id);
}
?>
