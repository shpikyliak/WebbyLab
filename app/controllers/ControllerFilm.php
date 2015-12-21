<?php

/**
 * Created by PhpStorm.
 * User: shpikyliak
 * Date: 21.12.15
 * Time: 07:37
 */
class ControllerFilm extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelFilm();
    }

    public function actionIndex()
    {
        $film = $this->model->getFilm($_GET['id']);
        $this->view->generate('FilmView.php','TemplateView.php',array($film,$_SERVER['HTTP_REFERER']));
    }

}