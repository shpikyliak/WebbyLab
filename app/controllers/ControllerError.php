<?php

class ControllerError extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function actionIndex()
    {
        $this->view->generate('ErrorView.php','TemplateView.php',$_GET);
    }


}