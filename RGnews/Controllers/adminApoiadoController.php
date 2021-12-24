<?php
class adminApoiadoController extends Controller
{
    public function index()
    {
        //1) chamar um model
       
        $n = new ServicoAdminApoiado();
        $dados = $n->listar();

        //2) chamar uma Viwes
        //3) fazer  a junção de back end  com front end
       
   
      

        $this->carregarTemplate('adminApoiado', array(),$dados);
    }

    public function biografia($id_noticia){

        $n = new ServicoAdminApoiado();
        $dados = $n->listarID($id_noticia);
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
      
        $this->carregarTemplate('biografia',$dados);

    }
    public function inserindousuario(){

       
      
        $this->carregarTemplate('inserindousuario');

    }
    public function editandousuario($id){

         $n = new ServicoAdminApoiado;
         $dados = $n->listarID($id);
           echo '<pre>';
            print_r($dados);
            echo '</pre>';
            
        
      
        $this->carregarTemplate('editandousuario',$dados);

    }
    public function deletandousuario($id){

        $n = new ServicoAdminApoiado();
         $dados = $n->deletar($id);
        
      
       /// $this->carregarTemplate('noticias');

    }

    
}
