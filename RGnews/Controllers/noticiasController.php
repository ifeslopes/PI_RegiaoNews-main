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
        $dados2 = $n->listar();

       
      
        $this->carregarTemplate('news', $dados,$dados2);

    }
    public function inserindonews(){
      
        $this->carregarTemplate('inserindonews');

    }
    public function editandonews($id){

         $n = new ServicoNoticia();
         $dados = $n->listarID($id);
      
      
        $this->carregarTemplate('editandonews',$dados);

    }

    public function deletandonews($id){

        $n = new ServicoNoticia();
         $dados = $n->deletar($id);
        
      
        $this->carregarTemplate('noticias');

    }

    /*
    public function futebol ($id_noticia){
          $n = new Noticias();
        $dados = $n->getNoticiasPorId($id_noticia);
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
      
      
        $this->carregarTemplate('futebol', $dados);

    }
    */
}
