<?php


class File
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;

    }

    public function checkExtention()
    {
        if (empty($this->file['file']['name'])) {
            throw new Exception('Please choose file!');
        }
        //get file type
        $name = $this->file['file']['name'];
        //check extention
        if (end(explode('.', $name)) != 'txt') {
            throw new Exception('Use txt extention');
        }
        return true;

    }

    public function parseText()
    {
        $file = $this->file['file']['tmp_name'];
        $text = file_get_contents($file);
        $films = explode("\n\n", $text);
        for ($i = 0; $i < count($films); $i++) {
            if ($films[$i]=="\n" || $films[$i] == '') continue;
            //make a film
            $filmList[$i] = new Film(Film::pasreFilm($films[$i]));
        }
        return $filmList;
    }
}