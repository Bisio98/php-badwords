<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inizio</title>
</head>
<body>
    <h2>Lorem Titolo</h2>

    <?php 
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ad itaque, reiciendis autem nisi iste, alias eius nobis totam esse excepturi molestiae minus officiis consectetur. Fugit, neque amet. Expedita, ratione! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse molestiae unde odio quas magnam quia praesentium ipsa qui libero! Odit reprehenderit dolor necessitatibus modi ullam corporis totam autem error incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem impedit unde cupiditate incidunt, quia veritatis explicabo harum iusto ipsa beatae eligendi quibusdam, recusandae sint quidem deleniti quaerat enim? Ratione, quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ex iste maiores ut commodi totam tempora adipisci voluptate doloribus ipsam impedit iusto modi nam vitae, molestiae hic rerum ea rem!' ;
    ?>

    <p> 
        <?php 
            echo  $text; 
        ?>
    </p>
    <p>
        <?php
            $replace = $_GET['element']; 
            $replace_text = str_replace($replace,'***', $text);
            echo $replace_text;
        ?>
    </p>

    <h4>
        Lunghezza paragrafo:  
        <?php
            $original_length = strlen($text);
            echo $original_length;
        ?>
    </h4>
</body>
</html>