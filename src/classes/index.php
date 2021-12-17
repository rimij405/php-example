<?php

class Task {

    // Fields

    protected $description;

    protected $completed;

    // Constructors

    /**
     * Construct a Task instance.
     */
    public function __construct($description) {
        // Automatically triggered on instantiation.
        // echo $description . ': ' . ($completed ? 'TRUE' : 'FALSE');
        $this->description = $description;
        $this->completed = false;
    }

    /**
     * Is the Task completed?
     *
     * @return boolean Task status.
     */
    public function isComplete() {
        return $this->completed;
    }

    /**
     * Get the task description.
     *
     * @return string Task description.
     */
    public function description() {
        return $this->description;
    }

}

$task = new Task("Get food!");

die(var_dump($task->isComplete()));

require 'index.view.php';