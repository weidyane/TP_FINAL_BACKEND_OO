<?php 
    class Estoque {

        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function getAllEstoques() {
            return $this->pdo->query("SELECT produtos.id, produtos.nome, categorias.nome as \"categoria\", quantidade FROM (estoque INNER JOIN produtos) INNER JOIN categorias WHERE produto_id = produtos.id and categoria_id = categorias.id");
        }
    }
?>