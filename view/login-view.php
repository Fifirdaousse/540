<?php require '../view/partial/header.php' ?>

<main class="d-flex jc-center wrap w-1200 m-auto police-color">
    <img src="../asset/img/quiz-burger.png" alt="Burger Quiz" class="w-50 m-10">

    <form action="/ctrl/login.php" method="post" class="border-ra p-45 light-blue">
        <h2 class="text-center"> Se connecter</h2>

        <div class="d-grid">
            <label for="email" class="m-10">E-mail :</label>
            <input type="text" name="email" id="email" class="input">
        </div>

        <div class="d-grid">
            <label for="mdp" class="m-10">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" class="input">
        </div>

        <!-- Si utilisateur introuvable ou Mot de Passe erroné affiche une message d'erreur -->
        <?php if (isset($message)) { ?>
            <p><?php echo $message; ?></p>
        <?php } ?>

        <div class="d-flex">
        <button class="border-ra button m-10"> Se connecter </button>

        <p>ou</p>

        <a href="../ctrl/sign-up.php" class="border-ra button m-10 text-deco"> Inscrivez-vous</a>
        </div>
    

    </form>


</main>

<?php require '../view/partial/footer.php' ?>
