<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

/** 
 * a pasta do host é c://xampp/htdocs/
 * o site da atividade esta na pasta sites/atv_agendameto dentro da pasta de host
*/ 
require_once("$root/sites/atv_agendameto/backend/cadastro.php");

class ControllerCadastro{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
        }else if(isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['id']);
        }
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setTelefone($_POST['tel']);
        $this->cadastro->setOrigem($_POST['origem']);
        $this->cadastro->setData_contato(date('Y-m-d',strtotime($_POST['data_agendamento'])));
        $this->cadastro->setObservacao($_POST['obs']);

        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }

    public function listar($id){
        return $result = $this->cadastro->listar($id);
    }

    private function editar($id){
        $this->cadastro->setId($id);
        $this->cadastro->setNome($_POST['txtNome']);
        $this->cadastro->setTelefone($_POST['txtTelefone']);
        $this->cadastro->setOrigem($_POST['txtOrigem']);
        $this->cadastro->setData_contato(date('Y-m-d',strtotime($_POST['txtDataContato'])));
        $this->cadastro->setObservacao($_POST['txtObservacao']);
        $result = $this->cadastro->editar();
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='../../listar.php'</script>";
        }else{
            echo "<script>alert('Erro ao alterar o registro!');</script>";
        }
    }

    public function excluir($id){
        $result = $this->cadastro->excluir($id);
        if($result >= 1){
            echo "<script>alert('Registro excluido com sucesso!');document.location='listar.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o registro!');</script>";
        }
    }
}

new ControllerCadastro();