<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays Example</title>
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
                <?php foreach($names as $name) : ?>
                    <li><?= $name ?></li>
                <?php endforeach; ?>
            </ul>
        </main>
</body>
</html>