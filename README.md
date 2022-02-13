
![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/g7119.png)


# Resumo


### Região News é um projeto integragrador do cursor Técnico em informática do (IFES-serra) Instituto Federal do Espirito Santo.
Este Projeto se trata de um mini portal de notícias para regiões específicas como bairros, condomínios, vilas etc...
Com intuito de levar informação de qualidade e manter os moradores da região informados com atualidades, eventos, informativos relevantes  que aconteçam pela região.
As pessoas responsáveis pelo portal serão  um grupo específico de pessoas como líder comunitário, síndico de condomínio, diretor de escola, diretor do posto de saúde e outros tipos de liderança ou especialistas que residam na região, deste grupo apenas  um será o administrador ficará responsável pela criação e remoção  das contas dos demais e outros ficaram responsáveis por adicionar editar e remover suas notícias .
## Linguagens e  Ferramentas 
Essas estão sendo as linguagem  e ferramentas utilizadas para desenvolvimento do projeto.
<div>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" align="center" heigth="50" width="60">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" align="center" heigth="50" width="60">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" align="center" heigth="50" width="60">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original-wordmark.svg" align="center" heigth="50" width="60">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" align="center" heigth="50" width="60">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" align="center" heigth="50" width="60">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" align="center" heigth="50" width="60">
<img src="https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white" align="center" heigth="80" width="100">
<img src="https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white" align="center" heigth="80" width="100">
<img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" align="center" heigth="80" width="100">
	
<br><br>
	
</div>

## Diagramas e Mapa do Sistema

### Diagrama de Casos de Uso
![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/unnamed.png) 
### Diagrama Diagrama de Classe
![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/diagrama.png) 
### Diagrama de Entidade Relacionamento
![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/diagramarelacinamento.png) 
### Mapa de Navegação do Sistema

![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/mapasistem.png) 

## Instalação e Utilização
### Requisitos:
-  Servidor Web
- Servidor Mysql
- PHP
- Recomendavel as ferramentas [XAMPP](https://www.apachefriends.org/pt_br/index.html) com [PHPMYADMIN](https://www.phpmyadmin.net/)
### Instalação:
- Com host local instalado e configura, clone o repositorio com comando:
- [`git clone https://github.com/ifeslopes/PI_RegiaoNews-main.git`]  na pasta do seu web serve ou baixe o zip  e descompacte o zip e copie arquivo na pasta do seu web servido.
- Importando Base de dados:
- Abra comando SQL e copie o codigo que se encontra na pasta `PI_RegiaoNews-main/RGnews/Media/basedado.sql` ou click aqui  [BASEDEDADOS](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/basedado.sql) e execute,  para criar banco de dados.
### Fazendo Conexão com Banco De Dados
- No arquivo conexao.php que fica na pasta `/PI_RegiaoNews-main/RGnews/Models/servicos` edite e insira **usuario** é **senha** do seu banco de dados

```
public static function getConexao(){
        if(!isset(self::$intancia)){
            $dbname = 'regiaonews';
            $host = 'localhost';
            $user= '**root**';
            $senha= '**senha**';
         
            try{
                self::$intancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
            }catch(Exception $e){
                echo'erro'.$e;
            }
        }
        return self::$intancia;
    }
   ```
    
  ##  Resultado 
 Se não ocorreu nem um erro nos processo acima o resultado deve ser esse quando você acessar
 ` http://localhost:80/PI_RegiaoNews-main/RGnews/`
   Para Logar no sistema: email **admin@admin.com** e senha:**12345**
 ### INDEX
 ![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/index.png) 
  ### LOGIN

 ![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/login.png) 

 ### AREA RESTRITA PAGINA ADMINISTRADOR
 ![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/admin.png) 
  ###  AREA RESTRITA PAGINA NOTICIAS
 ![Screenshot](https://github.com/ifeslopes/PI_RegiaoNews-main/blob/master/RGnews/Media/noticia.png)
 
   #  Resultado-hospedado-Heroku
   Aqui site hospedado no heroku:
   [REGIÃO NEWS](http://regiaonews.herokuapp.com/)
   
    
