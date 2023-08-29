<?php

declare(strict_types=1);

require_once('./public/helpers/router.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Library</title>
</head>

<body>
    <?php
    try {
        $router->findRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
    } catch (Exception $e) {
        require_once('./public/views/404.php');
    }
    ?>
</body>

</html>