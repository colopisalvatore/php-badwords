<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bad Words</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h1>PHP Bad Words</h1>

    <?php
        $paragraph  = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero maxime quae unde. Dignissimos consequuntur nulla animi voluptas accusantium deserunt numquam, voluptatem nostrum quo adipisci, optio facilis ipsum quam quas! Tenetur!';
        $word_censored = $_GET['word'];
        $paragraph_censored = str_replace($word_censored, '***', $paragraph);
    ?>
    
    <h2>Stampo la frase</h2>
    <p><?php echo $paragraph; ?></p>

    <h3>Lunghezza della frase:</h3>
    <p><?php echo strlen($paragraph); ?></p>
    
    <h2>Frase censurata</h2>
    <p><?php echo $paragraph_censored; ?></p>

    <h3>Lunghezza della frase censurata:</h3>
    <p><?php echo strlen($paragraph_censored); ?></p>
</body>
</html>
