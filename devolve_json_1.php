<?php
if(isset($_GET['nome'])) {
    $vetor = array('nome'=>$_GET['nome'], 'sobrenome'=>'de Tal');

    echo json_encode($vetor);
}

?>