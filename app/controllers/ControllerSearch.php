<?php

class ControllerSearch extends Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelSearch();
    }

    public function actionIndex()
    {

        $data = $this->model->getAllForSearch();

        $search = $this->model->getSearchArr($data);

    }
}