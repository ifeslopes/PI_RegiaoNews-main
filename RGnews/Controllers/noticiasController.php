<?php
class noticiasController extends Controller
{
    public function index()
    {
        //1) chamar um model
       
        $n = new ServicoNoticia();
        $dados = $n->listar();
        //2) chamar uma Viwes
        //3) fazer  a junção de back end  com front end
      

        $this->carregarTemplate('noticias', array(),$dados);
    }

    public function news($id_noticia){

        $n = new ServicoNoticia();
        $dados = $n->listarID($id_noticia);
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
      
        $this->carregarTemplate('news',$dados);

    }
    public function futebol ($id_noticia){
          $n = new Noticias();
        $dados = $n->getNoticiasPorId($id_noticia);
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
      
      
        $this->carregarTemplate('futebol', $dados);

    }
}
