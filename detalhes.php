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
    <!-- Icons google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Icons FontAwesome -->
    <script src="https://kit.fontawesome.com/687b2e222f.js" crossorigin="anonymous"></script>
	<!-- Link angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- Link jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php include 'cabecalho.html'?>

    <section class="main-topo">
        <a href="index.php"><i class="fa-solid fa-house"></i>Página inicial</a>
        <p>Produtos</p>
    </section>


    <section id="area-detalhes">
        <?php foreach ($dados as $dado){?>    
            
            <h2><?php if ($dado['id']==$id) {echo $dado['nome']; ?></h2>

            <div>
                <div><img src="<?php echo $dado['image']; ?>" alt="" ></div>
                
                <div>
                    <div>
                        <h3>
                            <?php echo ($dado['preco']);?> 
                            <span><?php echo ($dado['preco']+500);?></span>
                        </h3>
                        <p>
                            até 5x de R$<?php echo ($dado['preco']/5);?> sem juros
                        </p>
                    </div>

                    <button><i></i> Comprar</button>
                </div>
            </div>
            
        <?php }}?>
    </section>

    <?php include 'rodape.html'?>
    <script src="js/script.js"></script>
</body>
</html>