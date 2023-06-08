<?php 
session_start();
require '../view/partial/header.php'; 

?>

<main class=" d-flex jc-center wrap m-auto police-color">
    <form action="" method="post" class="w-70">
        <div class="border-ra light-blue text-center p-45 m-b-35">
            <!-- Questions -->
            <div class="border-ra bgc-w w-60">
                <h3>QUESTIONS ?</h3>
            </div>

            <!-- Réponses -->
            <div class="border-ra w-50 bgc-w m-15">
                <h4>Réponses</h4>
            </div>

            <div class="border-ra w-50 bgc-w m-15">
                <h4>Réponses</h4>
            </div>
        </div>

        <button class="button border-ra jc-center">Valider</button>
    </form>
</main>

<?php require '../view/partial/footer.php' ?>