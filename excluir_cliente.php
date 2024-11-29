<?php
require './Entity/Cliente.php';

$cli = new Cliente('','','');

$id = $_GET['id_cliente'];

$result = $cli->excluir($id);
// echo '<br>';
// echo $result;
if($result){
    echo '<script> alert("Cliente excluído com sucesso! ") </script> ';
    echo "<meta http-equiv='refresh' content='0.5;url=cadastro.php'>";
 
}else{
    echo '<script> alert("Erro ao excluir!! ") </script> '; 
    
}

?>