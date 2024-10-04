<?php

session_start();

require_once __DIR__.'/functions.php';


// var_dump(__DIR__);
// il dir è come se fosse il percorso assoluto 

  $minLenght = 3;
  $maxLenght = 10;

  $lenght = null; 
//   impostiamo $lenght su null altrimenti mi esce il warning dicendomi che  è Undefined

if (isset($_GET['lenght'])){
    $lenght = intval($_GET['lenght']);
    // var_dump($lenght);
    //  validazione sul server non baipassabile perchè l'utente non può arrivarci
    if ($lenght >=  $minLenght && $lenght <= $maxLenght ) {
        //  $password = generatePassword($lenght);
        // //    var_dump($password);
        // $_SESSION['password'] = $password;
        // oppure 
        $_SESSION['password'] = generatePassword($lenght);

        header('Location:./result.php');
    }
    else{
        header('Location:./index.php?error=1 ');
    }
}
else{
    header('Location:./index.php?error=1 ');
}