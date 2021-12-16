<?php

class conexao
{
    public static function connectar()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "regiaonews";

        try {
            return $conn = new PDO(
                "mysql:host=" .
                    $host .
                    "; dbname=" .
                    $dbname .
                    ";charset=utf8mb4",
                $user
            );
            //echo "rodou";
        } catch (PDOException $e) {
            echo "ERROR! Não pode conectar base de dados : " .
                $e->getMessage() .
                "<br/>";
            return "erro!";
        }
    }
}
?>
