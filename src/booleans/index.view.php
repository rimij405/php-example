<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booleans Example</title>
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
                <li>
                    <strong>Label: </strong> <?= $task['title']; ?>
                </li>
                
                <li>
                    <strong>Due Date: </strong> <?= $task['due']; ?>
                </li>
                
                <li>
                    <strong>Assignee: </strong> <?= $task['assigned_to']; ?>
                </li>
                
                <li>
                    <strong>Status: </strong> <?= $task['completed'] ? 'Completed' : 'Not Completed'; ?>
                </li>
                
            </ul>
        </main>
</body>
</html>