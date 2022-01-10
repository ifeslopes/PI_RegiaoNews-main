<?php
class RetornoImage
{
    private $nomeimage;

    function __construct($FILES)
    {
        $this->imageConverter($FILES);
    }

    public function getNomeimage()
    {
        return $this->nomeimage;
    }

    private function imageConverter($FILES)
    {
        if ($FILES["type"] == "image/png") {
            $nome_arquivo = md5($FILES["name"] . rand(1, 99)) . ".png";

            if (isset($_FILES["foto"])) {
                move_uploaded_file(
                    $FILES["tmp_name"],
                    "Media/" . $nome_arquivo
                );
                echo "imagem enviada com sucesso!";
            }

            $this->nomeimage = $nome_arquivo;

        } elseif ($FILES["type"] == "image/jpeg") {

            $nome_arquivo = md5($FILES["name"] . rand(1, 99)) . ".jpg";

            if (isset($FILES["name"])) {

                move_uploaded_file(
                    $FILES["tmp_name"],
                    "Media/" . $nome_arquivo
                );
                echo "imagem enviada com sucesso!";
            }

            $this->nomeimage = $nome_arquivo;
        } else {
            
            echo "só e possivel enviar arquivos jpg e png!";
            
        }
    }
}
