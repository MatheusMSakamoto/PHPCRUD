<?php

require './Entity/Cliente.php';

//RECEBENDO OS DADOS DO FORMS
$nome = 'Rafael Devzinho';
$cpf = '12312312333';
$email = 'rafaeldevmenosjunior@live.com';

$cliente = new Cliente($nome,$cpf,$email);
$resposta_servidor = $cliente->cadastrar();

if($resposta_servidor == true){
    echo "Cliente cadastrado com sucesso! ";

}else{
    echo "Erro ao cadastrar. ";
}


?>