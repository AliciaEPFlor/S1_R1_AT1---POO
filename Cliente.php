<?php
/**
 * Classe Cliente
 * Representa um cliente do sistema de cadastro.
 * Etapa 1 - Fundamentos de POO em PHP
 */

class Cliente {

    // ===== ATRIBUTOS (características do cliente) =====
    public $nome;
    public $email;
    public $cpf;

    // ===== MÉTODOS (ações do cliente) =====

    /**
     * Simula o cadastro do cliente no sistema.
     */
    public function cadastrar() {
        echo "Cliente cadastrado com sucesso!<br>";
    }

    /**
     * Exibe os dados do cliente na tela.
     * Usa $this para acessar os atributos do objeto atual.
     */
    public function mostrarDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Email: {$this->email}<br>";
        echo "CPF: {$this->cpf}<br>";
    }
}