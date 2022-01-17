<?php 
    $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas possimus pariatur perferendis rerum ipsa, necessitatibus incidunt, qui dolores consequatur sit veritatis, odio quo aperiam tempora quis laudantium ex. Id, iusto.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>

    <h1>BadWords</h1>
    
    <h2>Paragrafo non censurato:</h2>
    <p><?php echo $text ?></p>
    <span>Lunghezza paragrafo: <?php echo strlen($text) ?></span>

</body>
</html>