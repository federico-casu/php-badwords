
<?php

    $text = $_POST['paragraph'];
    $word = $_POST['bad_word'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <!-- CSS Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>

    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <h1>Results</h1>

            <h5>Paragraph:</h5>
            <p>
                <?php echo $text ?>
            </p>
            <p>
                La lunghezza del paragrafo è di <?php echo strlen($text) ?> caratteri
            </p>
        
            <h5>Paragraph:</h5>
            <p>
                <?php echo str_replace($word, '***', $text)  ?>
            </p>
        
            <p>
                La lunghezza del paragrafo è di <?php echo strlen(str_replace($word, '***', $text)) ?> caratteri
            </p>
        </div>
    </div>

    <!-- Js Bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js' integrity='sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==' crossorigin='anonymous'></script>

</body>
</html>