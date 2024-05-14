<?php

    require "../../configs/env/urls.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio <?php echo "- ".$page ?></title>
    <link rel="stylesheet" href="https://portfolio.rmbti.com.br/layouts/header/header.css">
    <script src="https://portfolio.rmbti.com.br/layouts/header/header.js" defer></script>

    <link rel="stylesheet" href="<?php echo $bodys ?>body.css">
    <link rel="stylesheet" href="<?php echo $footers ?>footer.css">
</head>

<body>
     
    <header>
        
        <nav class="navbar">
            <a href="https://portfolio.rmbti.com.br/contents/pages/home.php" class="logo">Portfolio</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="https://portfolio.rmbti.com.br/contents/pages/home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="https://portfolio.rmbti.com.br/contents/pages/projetos.php" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="https://portfolio.rmbti.com.br/contents/pages/sobre.php" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="https://portfolio.rmbti.com.br/contents/pages/contato.php" class="nav-link">Contato</a></li>
            </ul>
            <div class="hamburguer">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <div id="space"></div>


