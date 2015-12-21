<?php


class ControllerDelete extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelDelete();
    }

    public function actionIndex()
    {
        try {
            //url for redirect
            $url = 'http://'.$_SERVER['HTTP_HOST'].'/';
        $this->model->delete($_GET['id']);
            //get warnings
            $warnings = Warnings::getWarning();
            $url .= '?';
            //add warnings to url
            if (isset($warnings))
            {
                $url.='warnings=';
                for($i=0;$i<count($warnings);$i++)
                    $url .= $warnings[$i].'<br>';
                $url.='&';
            }
            $url.='message=Success';
        }catch(Exception $e) {
            //redirect to error page
            $url .= 'error/?err='.urlencode($e->getMessage()).'&refeer='.urlencode($_SERVER['HTTP_REFERER']);
            exit;
        }
        //redirect
        header('Location: '.$url);
        //$this->view->generate('ErrorView.php','TemplateView.php',$_GET);
    }


}