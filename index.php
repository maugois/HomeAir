<!DOCTYPE html>
<html lang="pt_BR">
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
    <title></title>
</head>
<body ng-app="meuSite" ng-controller="meuControle">
    <?php include 'cabecalho.html'?>

    <section id="area-inicial">
        <div id="inicial-img-solar">
            <img src="images/energia_solar_alt.png" alt="Imagem energia solar">
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
            <img src="images/visao.png" alt="Visão">
            
            <h3 class="area-title-n3">Visão</h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing <br> 
                elit. Unde facere repellendus ipsa, maxime non dolores <br> 
                totam! Quas unde dolor quibusdam!
            </p>
        </div>

        <div class="itens-missao">
            <img src="images/missao.png" alt="Missão">

            <h3 class="area-title-n3">Missão</h3>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing <br> 
                elit. Iure sit natus aperiam aut, recusandae repudiandae <br>
                 veritatis voluptas velit fugiat, molestias officia soluta!
            </p>
        </div>

        <div class="itens-missao">
            <img src="images/valores.png" alt="Valores">

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

        <div id="itens-servicos">
            <ul class="lista-servicos">
                <li><img class="img-l-servicos" src="images/servicos-ar-condicionado-01.jpg" alt=""></li>
                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ipsum error. Nihil tempora tenetur ducimus maiores, quo ea aut iste similique rerum, maxime ad enim reiciendis voluptatum odio numquam sit.</p></li>
                <li><img class="img-l-servicos" src="images/servicos-ar-condicionado-01.jpg" alt=""></li>
                <li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sint hic asperiores sequi odit, a consequatur in eaque illum? Illum accusamus nulla, et veniam nemo repellendus fugit voluptate ex. Quo.</p></li>
                <li><img class="img-l-servicos" src="images/servicos-ar-condicionado-01.jpg" alt=""></li>
                <li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius cupiditate accusamus, laboriosam tempore ipsam magni. Aliquam, amet repellat sed quos, laudantium similique, vitae odio rerum vel iste quod recusandae ducimus!</p></li>
            </ul>

            <ul class="lista-servicos">
                <li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ad omnis tenetur, provident, ab tempore nisi nihil fuga sequi quos error, libero officia repudiandae nemo molestias dolorem cum eos illo.</p></li>
                <li><img class="img-l-servicos" src="images/servicos-ar-condicionado-01.jpg" alt=""></li>
                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor autem magni reiciendis maiores labore suscipit sed facere aspernatur rem repellat ipsam, esse, molestiae iure ex atque maxime deserunt blanditiis ratione.</p></li>
                <li><img class="img-l-servicos" src="images/servicos-ar-condicionado-01.jpg" alt=""></li>
                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatum rem repudiandae magnam quos ipsa ab magni nisi? Possimus ad optio, non voluptas nobis doloremque similique reprehenderit aperiam laboriosam doloribus.</p></li>
                <li><img class="img-l-servicos" src="images/servicos-ar-condicionado-01.jpg" alt=""></li>
            </ul>
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
            <button class="filter-element" ng-mouseover="funcaoAr()">Ar condicionado</button>
            <button class="filter-element" ng-mouseover="funcaoInver()">Ar condicionado Inverter</button>
            <button class="filter-element" ng-mouseover="funcaoMulti()">Multi Split</button>
            <button class="filter-element" ng-mouseover="funcaoSolar()">Energia Solar</button>
        </div>

        <div id="arc">
            <ul ng-show="ar">
                <li><a href="detalhes.php?id=1"><img src="images/ar.png" alt=""></a></li>
                <li><a href="detalhes.php?id=2"><img src="images/ar2.png" alt=""></a></li>
                <li><a href="detalhes.php?id=3"><img src="images/ar3.png" alt=""></a></li>
                <li><a href="detalhes.php?id=4"><img src="images/ar4.png" alt=""></a></li>
                <li><a href="detalhes.php?id=5"><img src="images/ar5.png" alt=""></a></li>
            </ul>

            <ul ng-show="inver">
                <li><a href="detalhes.php?id=6"><img src="images/inverter.png" alt=""></a></li>
                <li><a href="detalhes.php?id=7"><img src="images/inverter2.png" alt=""></a></li>
                <li><a href="detalhes.php?id=8"><img src="images/inverter3.png" alt=""></a></li>
                <li><a href="detalhes.php?id=9"><img src="images/inverter4.png" alt=""></a></li>
                <li><a href="detalhes.php?id=10"><img src="images/inverter5.png" alt=""></a></li>
            </ul>

            <ul ng-show="multi">
                <li><a href="detalhes.php?id=11"><img src="images/multi-split.png" alt=""></a></li>
                <li><a href="detalhes.php?id=12"><img src="images/multi-split2.png" alt=""></a></li>
                <li><a href="detalhes.php?id=13"><img src="images/multi-split3.png" alt=""></a></li>
                <li><a href="detalhes.php?id=14"><img src="images/multi-split4.png" alt=""></a></li>
                <li><a href="detalhes.php?id=15"><img src="images/multi-split5.png" alt=""></a></li>
            </ul>

            <ul ng-show="solar">
                <li><a href="detalhes.php?id=16"><img src="images/solar.png" alt=""></a></li>
                <li><a href="detalhes.php?id=17"><img src="images/solar2.png" alt=""></a></li>
                <li><a href="detalhes.php?id=18"><img src="images/solar3.png" alt=""></a></li>
                <li><a href="detalhes.php?id=19"><img src="images/solar4.png" alt=""></a></li>
                <li><a href="detalhes.php?id=20"><img src="images/solar5.png" alt=""></a></li>
            </ul>
        </div>
    </section>

    <?php include 'rodape.html'?>
    
    <script src="js/script.js"></script>
    <script>
        // Filtro produtos
        var site = angular.module('meuSite', []);
        site.controller('meuControle', function($scope) {
            $scope.ar = true;
            $scope.inver = false;
            $scope.multi = false;
            $scope.solar = false;
            
            $scope.funcaoAr = function() {
                $scope.ar = true;
                $scope.inver = false;
                $scope.solar = false;
                $scope.multi = false;
            }

            $scope.funcaoInver = function() {
                $scope.inver = true;
                $scope.ar = false;
                $scope.solar = false;
                $scope.multi = false;
            }

            $scope.funcaoMulti = function() {
                $scope.multi = true;
                $scope.ar = false;
                $scope.inver = false;
                $scope.solar = false;
            }

            $scope.funcaoSolar = function() {
                $scope.solar = true;
                $scope.ar = false;
                $scope.inver = false;
                $scope.multi = false;
            }
        });
    </script>
</body>
</html>