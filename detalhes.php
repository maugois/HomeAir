<?php 
include 'dados.php';
$id = $_GET['id'];
?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/ICON_AR.ico" type="image/x-icon">
    <!-- Icons google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Icons FontAwesome -->
    <script src="https://kit.fontawesome.com/687b2e222f.js" crossorigin="anonymous"></script>
	<!-- Link angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- Link jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Detalhes do Produto</title>
</head> 
<body>
    <?php include 'cabecalho.html'?>

    <section class="main-topo">
        <a href="index.php"><i class="fa-solid fa-house"></i>Página inicial</a>
        <p>Produtos</p>
    </section>


    <section id="area-detalhes">
        <?php foreach ($dados as $dado){ if ($dado['id']==$id) {?>    
            <div id="produtos">
                <div id="img-geral">
                    <img src="<?php echo $dado['image']; ?>" alt="" >
                </div>
                

                <div id="area-dados">
                    <h2><?php echo $dado['nome']; ?></h2>
            
                    <span id="img-linha">
                        <img src="images/linha-azul.svg" alt="">
                    </span>

                    <p id="descricao">
                        <?php echo mb_strimwidth($dado['descricao'],0,341,'<a href="#descricao-completa">&nbsp;Ver mais...</a>');?>
                    </p>

                    <div id="dados-preco">
                        <h3>
                            R$<?php echo number_format(($dado['preco']),2,',','.');?> 
                            <span class="sem-promo">R$<?php echo number_format(($dado['preco']+500),2,',','.');?></span>
                        </h3>
                        <p>
                            até <span class="promo">5x</span> de <span class="promo">R$<?php echo number_format(($dado['preco']/5),2,',','.');?></span> sem juros
                        </p>
                    </div>

                    <div id="btn-compra">
                        <button>Comprar</button>
                    </div>
                </div>
            </div>
            <?php if (mb_strlen($dado['descricao']) > 341) {?>
                <hr style="width: 80%;">
                <div id="descricao-completa">
                    <h3>Informações do Produto</h3>

                    <p>
                        <?php echo ($dado['descricao']);?>
                    </p>
                </div>
            <?php }?>
        <?php }}?>
    </section>

    <?php include 'rodape.html'?>
    <script src="js/script.js"></script>
</body>
</html>