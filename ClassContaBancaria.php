<?php
class ContaBancaria {
    public $numConta;
    protected $tipoConta;
    private $dono;
    private $saldo;
    private $status = true || false;

    function __construct() { //Método Construtor
        $this -> setStatus(false);
        $this -> setSaldo(0);
    }

    function abrirConta() {
        if ($this -> getStatus() == false) {
            $this -> setStatus(true);
            if ($this -> getTipoConta() == 1) {
                $this -> setSaldo(50);
                echo "Sua conta do tipo {$this -> getTipoConta()} foi aberta e você ganhou 50 reais!<br>";
            } else if ($this -> getTipoConta() == 2) {
                $this -> setSaldo(150);
                echo "Sua conta do tipo {$this -> getTipoConta()} foi aberta e você ganhou 150 reais!<br>";
            }
        }
    }

    function fecharConta() {
        if ($this -> getSaldo() == 0) {
            $this -> setStatus(false);
            echo "A conta de número {$this -> getNumConta()} foi desativada.<br>";
        } else {
            echo "A conta possui saldo de {$this -> getSaldo()}, só é possível fechar conta com saldo zerado.<br>";
        }
    }

    function depositar($valorDepositado) {
        if (($this -> getStatus() == true) && ($valorDepositado > 0)) {
            $this -> setSaldo($this -> getSaldo() + $valorDepositado);
            echo "Depositado o valor de $valorDepositado.  Saldo pós movimentação = {$this -> getSaldo()}<br>";
        } else {
            echo "A conta esta desativada ou o valor a depositar é menor que zero.<br>";
        }
    }

    function sacar($ValorSacar) {
        if (($this -> getStatus() == true) && ($this -> saldo >= $ValorSacar) && ($ValorSacar > 0)) {
            $this -> setSaldo($this -> getSaldo() - $ValorSacar);
            echo "Valor de $ValorSacar sacado com sucesso.  Saldo pós movimentação = {$this -> getSaldo()}<br>";
        } else {
            echo "A conta está desativada ou não possui saldo ou o valor a sacar é inválido, sendo seu saldo de {$this -> getSaldo()} e o valor desejado a sacar de $ValorSacar.<br>";
        }
    }

    function pagarMensal() {
        if ($this -> getTipoConta() == 1) {
            $this -> setSaldo($this -> getSaldo() - 12);
            echo "Pago mensalidade de 12 reais. Saldo pós movimentação = {$this -> getSaldo()}<br>";
        } else if ($this -> getTipoConta() == 2) {
            $this -> setSaldo($this -> getSaldo() - 20);
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