<?php include "cabecalho.php" ?>
<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://image.tmdb.org/t/p/w300/or06FN3Dka5tukK1e9sl16pB3iy.jpg">
                    <span class="card-title">Vingadores</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i>
                    </a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> 9,7
                    </p>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://image.tmdb.org/t/p/w300/xJUILftRf6TJxloOgrilOTJfeOn.jpg">
                    
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i>
                    </a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> 9,7
                    </p>
                    <span class="card-title">Ad Astra</span>
                    <p>O futuro próximo, um momento em que a esperança e as dificuldades levam a humanidade a olhar para as estrelas e além. </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>