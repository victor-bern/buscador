<?php

namespace Src\App;

class View
{
    private $view;

    public function __constructor(string $dir, string $ext = "php")
    {
        $this->view = Engine::create($dir, $ext);
    }

    public function render(string $templateName, array $data)
    {
        return $this->view->render($templateName, $data);
    }

}
