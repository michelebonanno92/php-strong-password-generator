<?php
    
    $minLenght = 3;
    $maxLenght = 10;
    $lenght = '';
    $error = false;

    if (isset ($_GET['lenght'])) {
        $lenght = intval($_GET['lenght']);
    }

    if (isset ($_GET['error'])) {
      $error = true;
    }

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-strong-password-generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1>
                                PHP password generator
                            </h1>
                        </div>
                    </div>
                </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6 mx-sm-auto">
                        <?php
                            if ($error) {
                        ?>   
                            <div class=" alert alert-danger mb-4">
                                Valore lunghezza non valido ( nonostatnte i ripetuti avvertimenti.....!)
                            </div>
                        <?php
                            }
                        ?>
                        <form action="generate-password.php" method="GET">

                            <div class="mb-3">
                                <label for="lenght" class="form-label">
                                    <strong>
                                        Lunghezza della password <span class="text-danger">*</span>
                                    </strong>
                                </label>
                                <input
                                    name="lenght"
                                    type="number"
                                    class="form-control"
                                    id="lenght" 
                                    placeholder="Inserisci la lunghezza della password..."
                                    value=" <?php
                                        if (isset($_GET['lenght'])) {
                                            echo $_GET['lenght'];
                                        }
                                    ?>"
                                    required
                                    min="<?php echo $minLenght; ?>"
                                    max="<?php echo $maxLenght; ?>"
                                >
                            </div>

                            <div class="form-text mb-3">
                               <strong>
                                    N.B.
                               </strong>
                                i campi contrassegnati con <span class="text-danger">*</span> sono obbligatori 
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Invia</button>
                            </div>
                    
                        </form> 
                       
                    </div>
                </div>
            </div>
     
        </main>
        
    </body>
</html>
