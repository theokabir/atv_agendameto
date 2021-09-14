<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $telefone;
    private $origem;
    private $data_contato;
    private $observacao;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function setData_contato($data_contato){
        $this->data_contato = $data_contato;
    }
    public function setObservacao($obs){
        $this->observacao = $obs;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getOrigem(){
        return $this->origem;
    }
    public function getData_contato(){
        return $this->data_contato;
    }
    public function getObservacao(){
        return $this->observacao;
    }

    public function incluir(){
        return $this->inserirAgendamento($this->getNome(),$this->getTelefone(),$this->getOrigem(),$this->getData_contato(),$this->getObservacao());
    }
}