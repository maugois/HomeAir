<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title></title>
</head>
<body ng-app="">
    <?php include 'cabecalho.html'?>

    <section id="area-inicial">
        <div id="inicial-img-solar">
            <img src="images/energia_solar.png" alt="Imagem energia solar">
        </div>

        <div id="inicial-text">
            <p>Lorem ipsum dolor sit amet,
               <br>consectetur adipiscing elit.
               <img src="images/linha-azul.svg" alt="Imagem de uma linha">
            </p>
        </div>
    </section>

    <section id="area-missao">
        <div class="itens-missao">
            <img src="" alt="Visão">
            
            <h3 class="area-title-n3">Visão</h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing <br> 
                elit. Unde facere repellendus ipsa, maxime non dolores <br> 
                totam! Quas unde dolor quibusdam!
            </p>
        </div>

        <div class="itens-missao">
            <img src="" alt="Visão">

            <h3 class="area-title-n3">Visão</h3>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing <br> 
                elit. Iure sit natus aperiam aut, recusandae repudiandae <br>
                 veritatis voluptas velit fugiat, molestias officia soluta!
            </p>
        </div>

        <div class="itens-missao">
            <img src="" alt="Valores">

            <h3 class="area-title-n3">Valores</h3>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui <br> 
                veritatis vitae ad! Et, sit, rem facere praesentium, delectus <br> 
                dolor asperiores soluta saepe ex quis repellat molestiae. Aspernatur <br>
                 voluptates earum dignissimos.
            </p>
        </div>
    </section>


    <section id="area-servicos">
        <h2 class="area-title-n2">Serviços<img src="images/linha.svg" alt=""></h2>

        <div>

        </div>

        <div>

        </div>
    </section>


    <section id="area-sobre">
        <article id="text-sobre">
            <div>
                <h2 class="area-title-n2">Sobre nós<img src="images/linha.svg" alt=""></h2>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br> Ipsum iste corporis aperiam voluptates impedit ut amet, dolorem 
                    <br> quo. Fugiat, blanditiis. Corrupti est aspernatur sed reprehenderit 
                    <br> enim maiores laudantium recusandae neque. Lorem ipsum dolor sit amet 
                    <br> consectetur adipisicing elit. Aliquid dignissimos nostrum voluptatibus 
                    <br> consequatur porro non soluta, hic qui, accusamus similique incidunt 
                    <br> quisquam iste minima, doloremque sequi odit sit officiis cum! Lorem 
                    <br> ipsum dolor sit amet consectetur adipisicing elit. Officia itaque 
                    <br> assumenda quaerat facilis accusamus corrupti aspernatur soluta 
                    <br> molestiae in sit officiis saepe voluptate magnam, aut minima.
                </p>
            </div>
        </article>
        
        <article id="img-sobre">
            <img src="" alt="Logo grande">
        </article>
    </section>


    <section id="area-produtos">
        <h2 class="area-title-n2">Produtos<img src="images/linha.svg" alt=""></h2>
        
        <div id="filter-arc">
            <button class="filter-element">Ar condicionado</button>
            <button class="filter-element">Ar condicionado Inverter</button>
            <button class="filter-element">Multi Split</button>
            <button class="filter-element">Energia Solar</button>
        </div>

        <div id="arc">
            <ul style="display: none;">
                <li><a href="detalhes.php"><img src="images/energia-solar1.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/inverter.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/inverter2.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/multi-split.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/multi-split2.png" alt=""></a></li>
            </ul>

            <ul style="display: none;">
                <li><a href="detalhes.php"><img src="images/energia-solar1.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/inverter.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/inverter2.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/multi-split.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/multi-split2.png" alt=""></a></li>
            </ul>

            <ul style="display: none;">
                <li><a href="detalhes.php"><img src="images/multi-split.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/multi-split2.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/multi-split3.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/multi-split4.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="" alt=""></a></li>
            </ul>

            <ul>
                <li><a href="detalhes.php"><img src="images/solar.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/solar2.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/solar3.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/solar4.png" alt=""></a></li>
                <li><a href="detalhes.php"><img src="images/solar5.png" alt=""></a></li>
            </ul>
        </div>
    </section>

    <?php include 'rodape.html'?>
</body>
<script src="js/script.js"></script>
</html>