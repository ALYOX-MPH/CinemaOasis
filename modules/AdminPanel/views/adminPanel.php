<div class="container mt-5 pt-5">
    <?php foreach ($user_list ?? [] as $user) : ?>

        <h1><?= $user['first_name']; ?> <?= $user['last_name']; ?></h1>

    <?php endforeach; ?>
</div>