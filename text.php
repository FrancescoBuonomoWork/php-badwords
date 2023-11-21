<?php
$text = "La Partita Spagnola è un'apertura aggressiva che incoraggia il gioco attivo di entrambi i giocatori. È spesso preferita dai giocatori che preferiscono un gioco veloce con molte opzioni di attacco. Anche se ci sono alcune potenziali trappole in cui un giocatore impreparato può facilmente cadere, è una buona scelta per i giocatori di tutti i livelli che vogliono migliorare il loro gioco.";

// var_dump($_POST['replace_word']);

$new_text = str_replace($_POST['replace_word'], '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sostituisci</title>
</head>
<body>
    <p><?php echo $text;?></p>
    <p>Il testo è lungo: <?php echo strlen($text); ?> caratteri</p>

    <p><?php echo $new_text ?></p>
    <p>Il testo è lungo: <?php echo strlen($new_text); ?> caratteri</p>
</body>
</html>