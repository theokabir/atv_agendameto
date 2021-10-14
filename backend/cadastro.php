<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $id;
    private $nome;
    private $telefone;
    private $origem;
    private $data_contato;
    private $observacao;

    public function setId($id){
        $this->id = $id;
    }

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

    public function getId(){
        return $this->id;
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
    
    public function listar($id){
    	return $this->getAgendamentos($id);
    }

    public function editar(){
        return $this->updateAgendamentos($this->getId(),$this->getNome(),$this->getTelefone(),$this->getOrigem(),$this->getData_contato(),$this->getObservacao());
    }

    public function excluir($id){
        return $this->deleteAgendamentos($id);
    }
    
}