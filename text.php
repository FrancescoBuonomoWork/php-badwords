<?php
$text = "La Partita Spagnola è un'apertura aggressiva che incoraggia il gioco attivo di entrambi i giocatori. È spesso preferita dai giocatori che preferiscono un gioco veloce con molte opzioni di attacco. Anche se ci sono alcune potenziali trappole in cui un giocatore impreparato può facilmente cadere, è una buona scelta per i giocatori di tutti i livelli che vogliono migliorare il loro gioco.";

var_dump($_POST['replace_word']);
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
</body>
</html>