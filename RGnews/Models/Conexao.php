<?php
class Conexao{

private static $intancia;
private function __construct(){
}
    public static function getConexao(){
        if(!isset(self::$intancia)){
            $dbname = 'aula5_mvc';
            $host = 'localhost';
            $user= 'root';
            $senha= '';
            
            try{
                self::$intancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
            }catch(Exception $e){
                echo'erro'.$e;
            }
        }
        return self::$intancia;
    }
}
?>