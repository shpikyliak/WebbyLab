<?php

class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $base = 'films';
    public $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->base);
        if (!$this->mysqli) {
            throw new Exception('Not data base connect');
        }
        $this->mysqli->query('SET NAMES utf8');
    }

    public function getAll($fields = '*')
    {

        $sql = "SELECT ".$fields." FROM films";
        $result = mysqli_query($this->mysqli, $sql);


        if (!$result) {
            exit ('No table');
        }
        for ($i = 0; $i < $result->num_rows; $i++) {
            $row[] = $result->fetch_assoc();
        }

        return $row;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM films where id=" . $id;
        $result = mysqli_query($this->mysqli, $sql);
        if (!$result) {
            throw new Exception('Not data base connect');
        }
        $row = $result->fetch_assoc();

        return $row;
    }

    public function add($film)
    {
        $sql = "INSERT INTO films (title,release_year,format,stars) VALUES ('" . $film->title . "','" . $film->releaseYear . "','" . $film->format . "','"
            . $film->stars . "');   ";

        if (!$this->mysqli->query($sql)) Warnings::newWarning("Film " . $film->title . " has not been recorded!");
        return true;
    }

    public  function delete($id)
    {
        $sql = "DELETE FROM films where id=" . $id;
       // throw new Exception($sql);
        $result = mysqli_query($this->mysqli, $sql);
        if (!$result) {
            throw new Exception('Not data base connect');
        }
    }

}