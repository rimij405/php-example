<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Example</title>
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
        <header>
            <h1>
                <?= htmlspecialchars($greeting); ?>
            </h1>
        </header>
        <main>
            <div>This page is written using PHP and HTML with separate files.</div>
            <div>The time is: <?= date('H:m:s')?></div>
        </main>
</body>
</html>