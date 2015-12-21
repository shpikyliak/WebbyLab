<?php
class ModelDelete extends Model
{
    public function delete($id)
    {
        $db = new DB();
        $db->delete($id);
        return true;
    }
}