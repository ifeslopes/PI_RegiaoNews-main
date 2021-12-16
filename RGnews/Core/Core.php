<?php
class Core
{
    public function __construct()
    {
        $this->run();
    }
    public function run()
    {
        $parametros = array();
        if (isset($_GET["pag"])) {
            $url = $_GET["pag"];
        }

        //possoui informação apos dominio wwww.sitex.com/clesse/funcao/parametro
        if (!empty($url)) {
            $url = explode('/', $url);
            ;
            $controller = $url[0] . 'Controller'; //noticiasController
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $metodo = $url[0];
                array_shift($url);
            } else {
                $metodo = "index";
            }
            if (count($url) > 0) {
                $parametros = $url;
            }
        } else {
            $controller = "homeController";
            $metodo = "index";
        }

        $caminho = "RGnews/Controllers/" . $controller . ".php";

        if (!file_exists($caminho) && !method_exists($controller, $metodo)) {
            $controller = "homeController";
            $metodo = "index";
        }
        $c = new $controller();
        call_user_func_array(array($c, $metodo), $parametros);
    }
}