<?php

namespace Skywalker\Controller;

class Index extends \Skywalker\Core\Controller
{
    private $hack = 23;

    public function execute() : void
    {
        $this->renderHtml(['someVar' => $this->hack]);
    }
}