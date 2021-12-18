<?php

class Connection
{

    /**
     * Make a connection.
     *
     * @return PDO
     */
    public static function make($config)
    {
        try {
            return new PDO(
                $config['provider'] . ':host=' . $config['hostname'] . ';dbname=' . $config['database'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
