<?php
    class Produto {
        private $pdo;
        
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }
        
        public function getAllProdutos() {
            return $this->pdo->query("SELECT produtos.id, produtos.nome, produtos.descricao, produtos.preco, categorias.nome as \"nome_categoria\" FROM produtos INNER JOIN categorias WHERE categoria_id = categorias.id");
        }
        
        public function getProdutoById($id) {
            return $this->pdo->query("SELECT produtos.id, produtos.nome, produtos.descricao, produtos.preco, categorias.nome as \"nome_categoria\" FROM produtos INNER JOIN categorias WHERE categoria_id = categorias.id AND produtos.id = " . $id . "");
        }
        
        // TODO
    }
?>
