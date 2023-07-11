<?php 

class Dividas{

    private $pdo;
    public $msg_erro;
    public function __construct()
    {
        $nome = 'sistema_contas';
        $user = 'root';
        $senha = '';
        $host = 'localhost';

        try {
           $this->pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $user, $senha);
        } catch (Exception $e) 
        {
           $this->msg_erro = $msg_erro = $e->getMessage();
        }
    }

    public function get_meses()
    {
        $sql = $this->pdo->query("SELECT ID_MES, DESCRICAO FROM MES");
        if ($sql->rowCount() > 0) {
            $meses = $sql->fetchAll();
        } else {
            $meses = array();
        }

        return $meses;
    }
}