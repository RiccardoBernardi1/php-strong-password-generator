<?php 
    function RandomString($length=10)
    {
        $alphabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z'];
        $numbers=['0','1','2','3','4','5','6','7','8','9'];
        $symbols=['@','#','§','*','/','&','%',"^",'(',')'];
        $randstring = '';
        while(strlen($randstring)<$length) {
            $randstring .= $alphabet[rand(0, count($alphabet)-1)];
            if(strlen($randstring)<$length){
                $randstring .= $numbers[rand(0, count($numbers)-1)];
                if(strlen($randstring)<$length){
                    $randstring .= $symbols[rand(0, count($symbols)-1)];  
                }   
            }   
        }
        return $randstring;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Strong Password Generator</title>
</head>
<body>
    <header class="mt-5 py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Strong Password Generator</h1>
            <h2 class="fw-bold">Genera una password sicura</h2>
        </div>
    </header>  
    <main>
        <div class="container">
            <div class="password-container py-4 px-3 rounded-3"><?php 
             if(!empty($_GET["length"])){
                echo "<h4 class=\"text-center fw-bold\">La tua nuova password :</h4>" ;
                echo RandomString($_GET["length"]);
             }else{
                echo "Nessun parametro valido inserito";
             }
             ?> 
            </div>
            <form action="index.php" method="GET" class="mt-3 px-3 py-5 rounded-3"> 
                <label for="length" class="fw-bold">Lunghezza password : </label>
                <input type="number" name="length" id="length" class="text-center">
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
    </main>  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@ py-5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>