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

    <div class="mainContent">
        <div class="content">
            <?php
            include "../projects/flip-show/flip-show.php";
            ?>
        </div>
        <div class="content">
            <?php
            //include "../projects/flip-show/flip-show.php";
            ?>
        </div>
    </div>

    <?php include "../../layouts/footer/footer.php"; ?> 
    
</body>
</html>