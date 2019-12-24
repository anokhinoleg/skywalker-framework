<?php

namespace Skywalker\Core;

class Filesystem
{
    /**
     * @return string
     */
    public function getBaseDir() : string
    {
        return PROJECT_ROOT_DIR;
    }

    /**
     * @return string
     */
    public function getControllerDir() : string
    {
        return $this->getBaseDir() . '/src/Controller/';
    }
}