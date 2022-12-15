<?php 
    function RandomString($length=10)
    {
        $alphabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $uppercase=['A','B','C','D','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z'];
        $numbers=['0','1','2','3','4','5','6','7','8','9'];
        $symbols=['@','#','§','*','/','&','%',"^",'(',')'];
        $randstring = '';
        while(strlen($randstring)<$length) {
            $randstring .= $alphabet[rand(0, count($alphabet)-1)];
            if(strlen($randstring)<$length){
                $randstring .= $uppercase[rand(0, count($uppercase)-1)];
                if(strlen($randstring)<$length){
                    $randstring .= $numbers[rand(0, count($numbers)-1)];
                    if(strlen($randstring)<$length){
                        $randstring .= $symbols[rand(0, count($symbols)-1)];  
                    }   
                }  
            }
        }
        return $randstring;
    }
?>
    