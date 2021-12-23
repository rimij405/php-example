<?php 

namespace PHPExamples;

class Link {
    public string $title = 'Link';
    public string $anchor = '#';

    function __construct(string $title, string $anchor) {
        $this->title = $title;
        $this->anchor = $anchor;
    }

    public function getLink() {
        return '<a href="'.$this->anchor.'">'.$this->title.'</a>';
    }

}

$examples = [
    new Link("Array Utils", "array-utils"),
    new Link("Arrays", "arrays"),
    new Link("Booleans", "booleans"),
    new Link("Classes", "classes"),
    new Link("Conditionals", "conditionals"),
    new Link("Database", "database"),
    new Link("Dictionaries", "dicts"),
    new Link("Forms", "forms"),
    new Link("Functions", "functions"),
    new Link("Includes", "includes"),
    new Link("Markup", "markup"),
    new Link("PDOs", "PDOs"),
    new Link("Router", "router"),
    new Link("Variables", "variables")
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>PHP Examples</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>This index contains php examples.</p>
    <ul>
        <?php foreach($examples as $item): ?>
            <li>
                <?= $item->getLink() ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

