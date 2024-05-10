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
    <script src="<?php echo $headers ?>header.js" defer></script>

    <link rel="stylesheet" href="<?php echo $bodys ?>body.css">
    <link rel="stylesheet" href="<?php echo $footers ?>footer.css">
    
</head>

<body>

    <?php include "../../layouts/header/header.php"; ?>

    
    <?php include "../../projects/flip-show/flip-show-thumb.php"; ?>
    

    <?php include "../../layouts/footer/footer.php"; ?> 
    
</body>
</html>