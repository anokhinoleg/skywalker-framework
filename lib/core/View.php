<?php

namespace Skywalker\Core;

class View
{
    private $vars = ['title' => 'default'];

    public function getContent($vars)
    {
        $fileSystem = new FileSystem();
        ob_start();
        extract(array_merge($this->vars, $vars), EXTR_OVERWRITE);
        require $fileSystem->getBaseDir() . '/src/view/base.phtml';
        require $fileSystem->getBaseDir() . '/src/view' . $_SERVER['REQUEST_URI'] . '.phtml';
        require $fileSystem->getBaseDir() . '/src/view/footer.phtml';

        return ob_get_clean();
    }
}