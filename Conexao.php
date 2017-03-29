<?php

/**
 * User: Eduardo
 * Date: 29/03/2017
 * Time: 08:35
 * Cria uma conexão com o banco de Dados
 */
class Conexao implements IConexao
{
    private $host; //Normalmente localhost
    private $dbname; //O nome do seu banco de dados
    private $user; //Seu nome de usuario do banco de dados
    private $pass; //Sua senha de usuario do banco de dados
    //Construtor
    function __construct($host, $dbname, $user, $pass) //construtor, a cada Conexao criada deverá seguir o exemplo do construtor
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function conectar(){ //É aqui que as coisas acontecem, realiza a conexão com o banco de dados
        try{ //Caso esteja tudo OK, é por aqui que vai passar
            return new \PDO("mysql:host={$this->host};dbname={$this->dbname}",
                $this->user,
                $this->pass
            );
        }catch (\PDOException $e) { //Trata possivel erros, você pode personalizar sua mensagem de erro, fique a vontade
            echo "Erro!<br>Mensagem: " . $e->getMessage() . "<br>Code: " . $e->getCode() . "<br>";
            exit;
        }
    }
}