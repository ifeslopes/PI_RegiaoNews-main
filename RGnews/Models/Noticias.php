<?php
require_once 'Conexao.php';
class Noticias
{

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getConexao();
    }

    public function getNoticias(){
        $dados = array();
       $cmd =  $this->con->query('SELECT n.id_noticia, n.titulo,n.nome_imagem,n.texto, t.descricao
        from NOTICIAS n INNER JOIN tipos_noticias t on n.fk_id_noticias= t.id_tipo');
       $dados= $cmd->fetchall(PDO::FETCH_ASSOC);
       return $dados;
    }
    public function getNoticiasPorId($id){
        $dados = array();
        $cmd  = $this->con->query('SELECT n.*, t.descricao FROM NOTICIAS n 
        INNER JOIN tipos_noticias t ON n.fk_id_noticias= t.id_tipo
         where n.id_noticia ='.$id);
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        return $dados;
    }
}
