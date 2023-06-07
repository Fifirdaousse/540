<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Document</title>
</head>
<body>
    
<nav class="bgc-blue m-b-35 d-flex sp-bet">
    <a href="../index.php"><img src="../asset/img/logo.png" alt="Logo" class="w-55 align-center"></a>
    <div class="d-flex jc-end">
    <!-- Si connecter changement de la Navigation -->
        <?php if (isset($_SESSION['utilisateur_id'])) : ?>
        <a href="../ctrl/quiz.php" class="text-deco police-color p-1">Quizz</a></li>
        <a href="../ctrl/.php" class="text-deco police-color p-1">LOREM</a></li>
        <a href="../ctrl/logout.php" class="text-deco police-color p-1">Logout</a>

        <!-- Si pas connecter -->
        <?php else : ?>
         <a href="../ctrl/login.php" class="text-deco police-color p-1">Login</a>
         <a href="../ctrl/sign-up.php" class="text-deco police-color p-1">Sign up</a>
         <?php endif; ?>

     </div>
</nav>