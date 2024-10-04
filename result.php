<?php
    
    session_start();

    $password = $_SESSION['password'];

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result | php-strong-password-generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1>
                               Result |  PHP password generator
                            </h1>
                        </div>
                    </div>
                </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6 mx-sm-auto">
                     
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
                     
                    </div>
                </div>
            </div>
          
        </main>
        
    </body>
</html>
