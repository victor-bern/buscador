<?php

namespace Src\App;

use Src\Core\Controller;


class Web extends Controller{

    public function __construct()
    {
        parent::__construct(__DIR__. "/../../Themes/Buscador", "php");
    }

    public function Home(){
        echo $this->view->render("base", []);
    }

}