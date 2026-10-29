<?php
/**
 * Classe Funcionario
 * Desafio Profissional - Etapa 1
 * Justificativa: classe separada de Cliente porque tem
 * responsabilidades, atributos e ações diferentes.
 */

class Funcionario {

    // ===== ATRIBUTOS (específicos do funcionário) =====
    public $nome;
    public $email;
    public $matricula;
    public $cargo;
    public $salario;

    // ===== MÉTODOS =====

    /**
     * Simula o cadastro do funcionário no sistema.
     */
    public function cadastrar() {
        echo "Funcionário cadastrado com sucesso!<br>";
    }

    /**
     * Exibe os dados do funcionário.
     */
    public function mostrarDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Email: {$this->email}<br>";
        echo "Matrícula: {$this->matricula}<br>";
        echo "Cargo: {$this->cargo}<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }

    /**
     * Ação típica de funcionário: calcular salário com bônus.
     * (Exemplo simples só para diferenciar de Cliente.)
     */
    public function calcularSalarioComBonus($percentual) {
        $bonus = $this->salario * ($percentual / 100);
        return $this->salario + $bonus;
    }
}