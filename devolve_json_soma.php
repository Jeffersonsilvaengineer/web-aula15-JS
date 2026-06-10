<?php
if(isset($_GET['x']) && isset($_GET['y'])) {
    $x = intval($_GET['x']);
    $y = intval($_GET['y']);

    $soma = $x + $y;
    $vetor = array('resultado'=>$soma);

    echo json_encode($vetor);
}

?>