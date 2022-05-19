<?php

/*================== 

@author: luca rulvoni 
@version: 1.0.0
@url: https://www.lucarulvoni.it/be


================== */



    function checkFilterData($data) {

            $data = htmlentities($data);
            $data = trim($data);
            $data = htmlspecialchars($data);

    }

    function masterCode() {
        
        $sandbox = "http://www.lucarulvoni.it/sandbox";
        $author = "Luca Rulvoni";
        $company = "ComputerCode";
        $code_secure_prime  = "ABCDEFGHILMNOPQRSTUVZ1234567890";
        $cifratura = "1234567890qwertyuioplkjhgfdsazxcvbnm";
        $door_close = "closedoor";
        $door_open = "opendoor";
        
    }




?>