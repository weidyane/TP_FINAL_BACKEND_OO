<?php
    class Categoria {
        private $pdo;
        
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }
        
        public function getAllCategorias() {
            return $this->pdo->query("SELECT * FROM categorias");
        }
        
        public function getCategoriaById($id) {
            return $this->pdo->query("SELECT * FROM categorias WHERE ID = " . $id . "");
        }
        
        public function inserirCategoria($nome) {
            
        }
        
        // TODO
    }
?>
