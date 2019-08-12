<?php

declare (strict_types=1);

require 'Abstraction/BancoDeDados.php';

class Pessoa implements PosAlfa\Abstraction\BancoDeDados {

    const DSN = 'mysql:host=localhost;dbname=bd_trab_galvao';
    const USER = 'root';
    const PASS = '';

    public $id;
    public $nome;

    public function getID() {
        return $this->id;
    }
      
    public function setID($id) {
    $this->id= $id;
    }

    public function getNome() {
        return $this->nome;
    }
      
    public function setNome($nome) {
        $this->nome= $nome;
    }

    public function connect(string $dsn, string $user, string $pass): \PDO {
        $conexao = new \PDO($dsn, $user, $pass, [
            \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_CASE     => \PDO::CASE_LOWER
        ]);
        return $conexao;
    }
    public function prepare(\PDO $pdo, string $sql): \PDOStatement  {
        return $pdo->prepare($sql);
    }

    public function buscaBanco() {
        try {
            $pdo = $this->connect(self::DSN, self::USER, self::PASS);
            $sql = $this->prepare($pdo, 'SELECT * FROM pessoa');
            $sql->execute();

            while ($dados = $sql->fetch(PDO::FETCH_OBJ)) {

                $id = $dados->id;
                $nome = $dados->nome;
                
                echo 
                "
                <tbody>
                    <tr>
                        <th scope='row'> $id </th>
                        <td> $nome</td>
                    </tr>
                </tbody>
                ";
            }
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}