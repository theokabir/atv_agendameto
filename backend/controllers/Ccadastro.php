<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

/** 
 * a pasta do host é c://xampp/htdocs/
 * o site da atividade esta na pasta sites/atv_agendameto_pw3 dentro da pasta de host
*/ 
require_once("$root/sites/atv_agendameto_pw3/backend/cadastro.php");

class ControllerCadastro{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
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
}

new ControllerCadastro();