<?php

    require "../../configs/env/urls.php";

?>

<!-- divisão semântica cabeçalio-->
    <header>
        <nav class="navbar">
            <a href="<?php $contPages ?>home.php" class="logo">Rogerio Morais Barboza Ti</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="<?php $contPages ?>home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?php $contProjects ?>projetos.php" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="<?php $contPages ?>sobre.php" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="<?php $contPages ?>contato.php" class="nav-link">Contato</a></li>
            </ul>
            <div class="hamburguer">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
