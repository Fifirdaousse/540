<?php require '../view/partial/header.php'; ?>

<main class=" d-flex jc-center wrap m-auto police-color">
    <form action="" method="post" class="w-70 w-1000">
    <?php foreach ($questions as $question) : ?>
        <div class="border-ra light-blue text-center p-45 m-b-35 ">
            <!-- Questions -->
            <div class="border-ra bgc-w  ">
                <h3><?= $question['intitule'] ?> </h3>

            </div>

            <!-- Réponses -->
            <div class="border-ra  bgc-w m-15">
                <input type="radio" name="" id="ji">
                <label for="ji">Ho</label>
            </div>

            <div class="border-ra  bgc-w m-15">
                <h4>Réponses</h4>
            </div>
        </div>
        <?php endforeach; ?>

        <button class="button border-ra jc-center">Valider</button>
    </form>
</main>

<?php // require '../view/partial/footer.php' ?>
