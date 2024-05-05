<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>RMB Ti</title>
    
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/flip-pages.css">

    <script src="../js/header.js" defer></script>
    <script src="../js/flip-pages.js" defer></script>
</head>
<body>

    <?php
    include "../header.php";
    ?>

    <div class="mainContent">
        <div class="content">
            <?php
            include "../projects/flip-pages.php";
            ?>
        </div>
        <div class="content">
            <?php
            include "../projects/flip-pages.php";
            ?>
        </div>
    </div>

    <?php
    include "../footer.php";
    ?> 
    
</body>
</html>