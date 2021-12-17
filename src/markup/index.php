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
                <?php 

                $name = htmlspecialchars($_GET['name']);
                
                echo "Hello, $name!";
                ?>
            </h1>
        </header>
        <main>
            <div>This page is written using PHP and HTML.</div>
            <div>The time is: <?= date('H:m:s')?></div>
        </main>
</body>
</html>