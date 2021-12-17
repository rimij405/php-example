<?php

$animals = ['dog', 'cat'];

function preview($content) {
    echo '<pre>';
    die(var_dump($content));
    echo '</pre>';
}

preview($animals);