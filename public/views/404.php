<?php require_once('./public/views/partials/head.php'); ?>

<main>
    <section class="">
        <h2 class="text-center text-9xl bg-cyan-800 text-white py-24">404</h2>
        <p class="text-center text-lg py-16">
            <?php echo $e->getMessage(); ?>
        </p>
    </section>
</main>

<?php require_once('./public/views/partials/footer.php'); ?>