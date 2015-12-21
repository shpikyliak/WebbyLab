<?php

class Film
{
    public $title;
    public $releaseYear;
    public $format;
    public $stars;

    public function __construct($film)
    {
        $this->title = $film['Title'];
        $this->releaseYear = $film['Release Year'];
            $this->format = $film['Format'];
        $this->stars = $film['Stars'];

    }
    
    static function pasreFilm($film)
    {
        $about = explode("\n", $film);
        $fields = array('Title', 'Release Year', 'Format', 'Stars');  //success title
        if (count($about) != 4) throw new Exception('Uncorrect syntax');
        for ($i = 0; $i < 4; $i++) {
            $string = explode(': ', $about[$i], 2);
            if (!in_array($string[0], $fields)) throw new Exception('Uncorrect syntax');
            $answer[$string[0]]= $string[1];

        }
        return $answer;
    }

}