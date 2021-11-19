<?php
    require_once('dados/produtos.php');

    $id = null;
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];

    if(!isset($produtos[$id]))    
    $id = null;


    }

    if(is_null($id)){

    ?>
        <div>O código é nulo ou não existe</div>

<?php
    }else{
?>

<div>
    <img src="imagens/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
</div>

<div>
    <h2><?php echo $produtos[$id]['nome']?></h2>
    <p><?php echo $produtos[$id]['descricao']?></p>
</div>

<?php

    }

?>


