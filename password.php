<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Password Generated</title>
</head>
<body>
    <?php include __DIR__ ."/header.php" ?>  
    <main class="container">
        <div class="password-container py-4 px-3 rounded-3 mt-5">
            <h4 class="text-center fw-bold">La tua nuova password</h4>
            <?php echo $_SESSION['password'] ?> 
        </div>
    </main>
</body>
</html>