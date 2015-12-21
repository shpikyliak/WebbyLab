<?php

class ModelSearch extends Model
{
    public function getAllForSearch()
    {

        $db = new DB();
        $result = $db->getAll('id,title,stars');
        return $result;

    }

    public function getSearchArr($data)
    {

        var_dump($data[0]);
        for ($i=0;$i<count($data);$i++);
        {
            $titles[$data[$i]['title']] = $data[$i]['id'];
            $stars[$data[$i]['stars']] =  $data[$i]['id'];
        }
        $search = array($stars,$titles);
        echo'<pre>';
        var_dump($search);
    }
}