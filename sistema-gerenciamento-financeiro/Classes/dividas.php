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

        /**
         * CHAMA O DB E SE HOUVER ERRO NA REQUISIÇÃO, TRAZ UMA MENSAGEM DE ERRO
         */
        try {
           $this->pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $user, $senha);
        } catch (Exception $e) 
        {
           $this->msg_erro = $msg_erro = $e->getMessage();
        }
    }

    /**
     * RETORNA EM UM ARRAY OS DADOS CADASTRADOS NA TABELA MÊS SE HOUVER MAIS LINHAS QUE 0, SE NÃO RETORNA UM ARRAY VAZIO 
     */
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