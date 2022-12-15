<?php 
    function RandomString($length=10)
    {
        $alphabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $uppercase=['A','B','C','D','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z'];
        $numbers=['0','1','2','3','4','5','6','7','8','9'];
        $symbols=['@','#','§','*','/','&','%',"^",'(',')'];
        $randstring = '';
        $min_letters=2;
        $min_uppercase=2;
        $min_symbols=2;
        $min_numbers=2;
        $letters_count=0;
        $uppercase_count=0;
        $numbers_count=0;
        $symbols_count=0;
        while(strlen($randstring)<$length || $letters_count<$min_letters||$uppercase_count<$min_uppercase||$numbers_count<$min_numbers||$symbols_count<$min_symbols) {
            $index=rand(1,4);
            if($index===1){
                $randstring .= $alphabet[rand(0, count($alphabet)-1)];
                $letters_count+=1;
            }
            if(strlen($randstring)<$length && $index===2){
                $randstring .= $uppercase[rand(0, count($uppercase)-1)];
                $uppercase_count+=1;
            }
            if(strlen($randstring)<$length && $index===3){
                $randstring .= $numbers[rand(0, count($numbers)-1)];
                $numbers_count+=1;
            }
            if(strlen($randstring)<$length && $index===4){
                $randstring .= $symbols[rand(0, count($symbols)-1)]; 
                $symbols_count+=1; 
            }   
        }
        return $randstring;
    }
?>
    