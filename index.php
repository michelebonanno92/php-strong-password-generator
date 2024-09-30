<?php
    $lunghezzaPassword = 5 ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-strong-password-generator</title>
    </head>
    <body>

        <main>
            <section>
                <h2>
                   Invio lunghezza della password
                </h2>
                <form method="GET">
                        <div>
                            <button type="submit" name="lunghezzaPassword" value="5">
                                INVIA
                            </button>
                        </div>
                </form>
            </section>

            <section>
                <h2>
                    Ricezione lunghezza della password
                </h2>
                <div>
                    Lunghezza della password
                    <p>
                         <?php echo $_GET['lunghezzaPassword']; ?> 
                    </p>
                </div>
            </section>
        
        </main>
        
    </body>
</html>