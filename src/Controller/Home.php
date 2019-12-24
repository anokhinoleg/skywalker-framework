<?php

namespace Skywalker\Controller;

class Home extends \Skywalker\Core\Controller
{
    public function execute()
    {
        $this->renderHtml(['greeting' => "Hello homepage", 'title' => 'Homepage']);
    }
}