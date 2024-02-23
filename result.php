
<?php

    $text = $_GET['paragraph'];
    $word = $_GET['bad_word'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <p>
        <?php echo $text ?>
    </p>
    <p>
        La lunghezza del paragrafo è di <?php echo strlen($text) ?> caratteri
    </p>

    <p>
        <?php echo str_replace($word, '***', $text)  ?>
    </p>

    <p>
        La lunghezza del paragrafo è di <?php echo strlen(str_replace($word, '***', $text)) ?> caratteri
    </p>

</body>
</html>