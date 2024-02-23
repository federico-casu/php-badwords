
<!-- 

    Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

    Gestire il tutto con due file diversi.

    Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
    
    Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
    - stampare a schermo il paragrafo e la sua lunghezza
    - stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

-->


<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- CSS Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="container py-3 border">
            <h1>Form</h1>

            <form action="result.php" method="GET">
                <div class="mb-3">
                    <label for="paragraph" class="form-label">Paragraph</label>
                    <textarea class="form-control" name="paragraph" id="paragraph" rows="3"></textarea>
                </div>
                
    
                <div class="mb-3">
                    <label for="bad_word" class="form-label">Bad word</label>
                    <input
                        type="text"
                        class="form-control"
                        name="bad_word"
                        id="bad_word"
                        placeholder="Type here the bad word.."
                    />
                </div>
    
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
            </form>
            
            
            
        </div>
    </div>


    <!-- Js Bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js' integrity='sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==' crossorigin='anonymous'></script>
</body>
</html>