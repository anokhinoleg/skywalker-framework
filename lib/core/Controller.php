<?php

namespace Skywalker\Core;

require_once 'View.php';

class Controller
{
    /**
     * @var View
     */
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function renderHtml($vars) : void
    {
        echo $this->view->getContent($vars);
    }
}