<?php

namespace Src\Core;
use League\Plates\Engine;

class View
{
    private $view;

    public function __construct(string $dir, string $ext = "php")
    {
        $this->view = Engine::create($dir, $ext);
    }

    public function render(string $templateName, array $data)
    {
        return $this->view->render($templateName, $data);
    }

}
