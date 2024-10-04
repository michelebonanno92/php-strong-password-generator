<?php

    function generatePassword($len) {
        $pass  = '';

        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $numnbers = '1234567890' ;
        $symbols = '!?~@#-_+<>[]{}';

        $allCharacters =  $uppercase.$lowercase.$numnbers.$symbols ;

        $fisrtIndex = 0;
    
        $lastIndex = strlen($allCharacters) - 1;

       
        for ( $i = 0; $i < $len; $i++) {
            $randomIndex = rand($fisrtIndex, $lastIndex);

            // var_dump($allCharacters[$randomIndex]);

            $pass .= $allCharacters[$randomIndex];

            // var_dump($pass);
        }

        return $pass;
    }

      $minLenght = 3;
      $maxLenght = 10;

      $lenght = null; 
      $password = null; 



    //   impostiamo $lenght su null altrimenti mi esce il warning dicendomi che  è Undefined

    if (isset($_GET['lenght'])){

        $lenght = intval($_GET['lenght']);

        // var_dump($lenght);
        //  validazione sul server non baipassabile perchè l'utente non può arrivarci
        if ($lenght >=  $minLenght && $lenght <= $maxLenght ) {
            
           $password = generatePassword($lenght);
        //    var_dump($password);
        }

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
                        <form action="" method="GET">

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
                        <?php 
                            if($password != null){
                        ?>
                                <div class="row">
                                <div class="col col-sm-6 mx-sm-auto">
                                    <h4 class="mb-3 mt-3 text-center">
                                        La password generata è :
                                    </h4>
                                    <div class="text-center fs-1">
                                        <?php echo $password ?>  
                                    </div>
                                </div>
                             </div>
                        <?php     
                            }
                        ?>
                        
                       
                    </div>
                </div>
            </div>
          
               
           

     
        </main>
        
    </body>
</html>
