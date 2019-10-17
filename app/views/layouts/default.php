<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?=$this->getMeta();?>
</head>
<body>
    <h1>Шаблон DEFAULT</h1>
    <?=$content;?>
    <?php
        // Дебаг РэдБин запросов
        $logs = \R::getDatabaseAdapter()
        ->getDatabase()
        ->getLogger();

        debug( $logs->grep( 'SELECT' ) );
    ?>
</body>
</html>