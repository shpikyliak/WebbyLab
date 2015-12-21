<?php

/**
 * Created by PhpStorm.
 * User: shpikyliak
 * Date: 21.12.15
 * Time: 07:39
 */
class ModelFilm extends Model
{
    public function getFilm($id)
    {
        $db = new DB();
        $result = $db->get($id);

        return $result;

    }

}