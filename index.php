<?php 
session_start();
include __DIR__ ."/functions.php";
if(!empty($_GET["length"])){
    $_SESSION['password']=RandomString($_GET["length"]);
    header("Location: http://localhost/php-strong-password-generator/password.php");
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
            <form action="index.php" method="GET" class="mt-3 px-3 py-5 rounded-3"> 
                <label for="length" class="fw-bold me-3">Lunghezza password : </label>
                <input type="number" name="length" id="length" class="text-center me-3" min="4">
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
    </main>  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@ py-5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>