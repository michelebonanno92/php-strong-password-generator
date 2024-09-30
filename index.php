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
<?php
    function generateRandomPassword($lunghezzaPassword) {
        // Caratteri che possono essere utilizzati nella password
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*()-_=+[]{};:,.<>?';
    
        // Combinare tutti i caratteri disponibili
        $allCharacters = $uppercase . $lowercase . $numbers . $symbols;
    
        // Assicurati che la password contenga almeno un carattere di ciascun tipo
        $password = '';
        $password .= $uppercase[random_int(0, strlen($uppercase) - 1)];
        $password .= $lowercase[random_int(0, strlen($lowercase) - 1)];
        $password .= $numbers[random_int(0, strlen($numbers) - 1)];
        $password .= $symbols[random_int(0, strlen($symbols) - 1)];
    
        // Riempi il resto della password con caratteri casuali
        for ($i = 0; $i < $lunghezzaPassword; $i++) {
            $password .= $allCharacters[random_int(0, strlen($allCharacters) - 1)];
        }
    
        // Mescola la password per evitare sequenze prevedibili
        $password = str_shuffle($password);
    
        return $password;
    }
    
    // Esempio di utilizzo
    $newPassword = generateRandomPassword($lunghezzaPassword);
    echo "La tua password casuale è: " . $newPassword;
    
?>