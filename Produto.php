<?php
/**
 * Classe Produto
 * Exercício de aplicação - Etapa 1
 * Atributos: nome, preco
 * Método: mostrarProduto()
 */

class Produto {

    // ===== ATRIBUTOS =====
    public $nome;
    public $preco;

    // ===== MÉTODOS =====

    /**
     * Exibe os dados do produto formatados.
     */
    public function mostrarProduto() {
        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}