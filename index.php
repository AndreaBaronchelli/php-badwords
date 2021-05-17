<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>
<body>

    <?php 
    //Variabile testo
    $text = 'Nel mezzo del cammin di nostra vita
    mi ritrovai per una selva oscura,
    ché la diritta via era smarrita.'; ?>
    
    <!-- Stampa testo -->
    <p><?php echo $text; ?></p>
    
    <!-- Stampa lunghezza stringa -->
    <div>La lunghezza del testo è di <?php echo strlen($text); ?> caratteri</div>

    <!-- Creazione Badword -->
    <?php 
    $badword = $_GET['badword']; 
    ?>

    <!-- Stampa testo modificato -->
    <p><?php echo str_replace($badword, '***', $text); ?></p>
</body>
</html>