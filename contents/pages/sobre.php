<?php

    require "../../configs/env/urls.php";

?>

<!-- <?php echo $domain ?> -->

<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMB Ti</title>
    
    <link rel="stylesheet" href="<?php echo $headers ?>header.css">
    <link rel="stylesheet" href="<?php echo $bodys ?>body.css">
    <link rel="stylesheet" href="<?php echo $footers ?>footer.css">

    <script src="<?php echo $headers ?>header.js" defer></script>
</head>

<body>

    <?php include "../../layouts/header/header.php"; ?>

    <div class="txtBox">
    <h1>SOBRE</h1><br>
    <p>ROGERIO MORAIS BARBOZA<br>
    42 anos<br>
    Santo André/SP<br>
    linkedin.com/in/rogeriomoraisbarboza<br>
    github.com/rogeriobarboza
    </p><br><hr><br>
    <h2>OBJETIVO:</h2>
    <h2>estágio, vaga</h2><br>
    <p>FORMAÇÃO ACADÊMICA<br>
    Cursando superior tecnólogo em análise e desenvolvimento de sistemas - UNICSUL
conclusão em 2024.
    </p>                
    </div>

    <?php include "../../layouts/footer/footer.php"; ?> 
    
</body>

</html>