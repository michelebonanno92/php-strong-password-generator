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
?>

     