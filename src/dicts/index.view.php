<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Arrays Example</title>
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
            <ul>
                <?php foreach($person as $key => $val) : ?>
                    <li>
                        <strong><?= $key ?>: </strong>
                        <?= $val ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <pre><?= var_dump($person) ?></pre>
        </main>
</body>
</html>