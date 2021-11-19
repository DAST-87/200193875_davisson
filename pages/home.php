<?php
    require_once('dados/produtos.php');
?>

<style>

    .foto_prod{
        width: 200px;
        text-align: center;
        font-family: Montserrat; 
        margin-rigth: 30px;
        margin-left: 30px;
    }
    .foto_prod img{
        width: 200px;
        height: 200px;
        border-radius: 100px;
    }
</style>

<?php
    foreach($produtos as $produto):
?>

<div class="foto_prod">
    <img src="imagens/<?php echo $produto['imagem']?>" alt="<?php echo $produto['nome']?>">
    <h3><?php echo $produto['nome']?></h3>
</div>


<?php
    endforeach    
?>