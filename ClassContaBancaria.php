<?php
class ContaBancaria {
    public $numConta;
    protected $tipoConta;
    private $dono;
    private $saldo;
    private $status = true || false;

    function __construct() { //Método Construtor
        $this -> status = false;
        $this -> saldo = 0;
    }

    function abrirConta() {
        if ($this -> status == false) {
            $this -> setStatus(true);
            if ($this -> tipoConta == 1) {
                $this -> saldo = 50;
                echo "Sua conta do tipo {$this -> getTipoConta()} foi aberta e você ganhou 50 reais!<br>";
            } else if ($this -> tipoConta == 2) {
                $this -> saldo = 150;
                echo "Sua conta do tipo {$this -> getTipoConta()} foi aberta e você ganhou 150 reais!<br>";
            }
        }
    }

    function fecharConta() {
        if ($this -> saldo == 0) {
            $this -> setStatus(false);
        } else {
            echo "A conta possui saldo de {$this -> getSaldo()}, só é possível fechar conta com saldo zerado.<br>";
        }
    }

    function depositar($valorDepositado) {
        if (($this -> status = true) && ($valorDepositado > 0)) {
            $this -> saldo = $this -> saldo + $valorDepositado;
            echo "Depositado o valor de $valorDepositado.  Saldo pós movimentação = {$this -> getSaldo()}<br>";
        } else {
            echo "A conta esta desativada ou o valor a depositar é menor que zero.<br>";
        }
    }

    function sacar($ValorSacar) {
        if (($this -> status == true) && ($this -> saldo >= $ValorSacar) && ($ValorSacar > 0)) {
            $this -> saldo = $this -> saldo - $ValorSacar;
            echo "Valor de $ValorSacar sacado com sucesso.  Saldo pós movimentação = {$this -> getSaldo()}<br>";
        } else {
            echo "A conta está desativada ou não possui saldo ou o valor a sacar é inválido, sendo seu saldo de {$this -> getSaldo()} e o valor desejado a sacar de $ValorSacar.<br>";
        }
    }

    function pagarMensal() {
        if ($this -> tipoConta == 1) {
            $this -> saldo = $this -> saldo - 12;
            echo "Pago mensalidade de 12 reais. Saldo pós movimentação = {$this -> getSaldo()}<br>";
        } else if ($this -> tipoConta == 2) {
            $this -> saldo = $this -> saldo - 20;
            echo "Pago mensalidade de 20 reais. Saldo pós movimentação = {$this -> getSaldo()}<br>";
        }
    }

    function getNumConta() {
        return $this -> numConta;
    }

    function setNumConta($numConta) {
        $this -> numConta = $numConta;
    }

    function getTipoConta() {
        return $this -> tipoConta;
    }

    function setTipoConta($tipoConta) {
        $this -> tipoConta = $tipoConta;
    }

    function getDono() {
        return $this -> dono;
    }

    function setDono($dono) {
        $this -> dono = $dono;
    }

    function getSaldo() {
        return $this -> saldo;
    }

    function setSaldo($saldo) {
        $this -> saldo = $saldo;
    }

    function getStatus() {
        return $this -> status;
    }

    function setStatus($status) {
        $this -> status = $status;
    }
}