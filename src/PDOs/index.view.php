<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO Example</title>
    <style>
        body {
            font-size: 1.5em;
            padding: 2em;
        }

        header {
            background: #e3f424;
        }
    </style>
</head>
<body>
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
</body>
</html>