<?php


class ModelMain extends Model
{
    public function getDataAll()
    {

        $db = new DB();
        $all = $db->getAll();
        return $all;
    }

    public function import($file)
    {
        $file = new File($file);
        $file->checkExtention();
        $parseText = $file->parseText();
        $db = new DB();
        for ($i = 0; $i < count($parseText); $i++) {
            $db->add($parseText[$i]);
        }
        return true;
    }

}