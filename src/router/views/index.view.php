<?php require('partials/header.php') ?>
    <main>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <s><?= $task->description; ?></s>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </main>
<?php require('partials/footer.php') ?>