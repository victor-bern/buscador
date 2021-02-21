<?php 

namespace Src\Core;

class Controller {
    protected $view;

    public function __construct(string $dir = TEMPLATE_BASE_FOLDER, $ext = "php"){
        $this->view = new View($dir, $ext);
    }
}