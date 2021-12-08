<?php
interface InterfaceCrud
{
    public function salvar();
    public function listar($id);
    public function editar($id);
    public function deletar($id);
}
?>
