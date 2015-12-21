<?php


class ControllerMain extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelMain();
    }
    //
    //default
    //
    public function actionIndex()
    {
        $data = $this->model->getDataAll();
        $this->view->generate('MainView.php', 'TemplateView.php', $data);

    }
    public function actionImport()
    {
        $url = 'http://'.$_SERVER['HTTP_HOST'].'/';
        try {
            $this->model->import($_FILES);
            $warnings = Warnings::getWarning();
            $url .= '?';
            if (isset($warnings))
            {
                $url.='warnings=';
                for($i=0;$i<count($warnings);$i++)
                    $url .= $warnings[$i].'<br>';
                $url.='&';
            }
            $url.='message=Success';

        }catch (Exception $e)
        {
            $url .= 'error/?err='.urlencode($e->getMessage()).'&refeer='.urlencode($_SERVER['HTTP_REFERER']);
        }

        header('Location: '.$url);
        exit;
    }
}