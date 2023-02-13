<?php

class ContaBancaria {

    private $data;
    private $saldoInical;
    private $saldoAtual;
    public $aOperacoes = [];
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getData() {
        return $this->data;
    }

    public function getSaldoInical() {
        return $this->saldoInical;
    }

    public function getSaldoAtual() {
        return $this->saldoAtual;
    }

    public function getAOperacoes() {
        return $this->aOperacoes;
    }

    public function setData($data): void {
        $this->data = $data;
    }

    public function setSaldoInical($saldoInical): void {
        $this->saldoInical = $saldoInical;
        $this->saldoAtual = $this->saldoInical;
    }

    public function setSaldoAtual($saldoAtual): void {
        $this->saldoAtual = $saldoAtual;
    }

    public function setAOperacoes($aOperacoes): void {
        $this->aOperacoes = $aOperacoes;
    }

    public function Sacar($iValorEntrada,) {
        $this->saldoAtual -= $iValorEntrada;
        array_push($this->aOperacoes, "Saque", $iValorEntrada);
        return "Realizado saque para o cliente $this->nome no valor de $iValorEntrada. Saldo atual $this->saldoAtual";
    }

    public function Depositar($iValorEntrada) {
        $this->saldoAtual += $iValorEntrada;
        array_push($this->aOperacoes, "Deposito", $iValorEntrada);
        return "Realizado depósito para o cliente $this->nome no valor de $iValorEntrada. Saldo atual $this->saldoAtual";
    }

    public function exibeSaldo() {
        array_push($this->aOperacoes, "Saldo atual", $this->saldoAtual);
        return "Saldo atual do cliente $this->nome $this->saldoAtual";
    }

    public function imprimeOperacoes() {
        array_push($this->aOperacoes, "Saldo inicial", $this->saldoInical);
        echo "<br><br>";
        echo "Operação | Valor <br><br>";
        $parar = true;
        $valor = 0;
        while ($parar == true) {
            echo "<br>";
            for ($index = 0; $index <= 1; $index++) {
                echo "-----" . $this->aOperacoes[$valor];
                $valor++;
            }
            if ($valor == count($this->aOperacoes)) {
                $parar = false;
            }
        }
    }
}
?>