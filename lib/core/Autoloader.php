<?php

namespace Skywalker\Core;

require_once 'Filesystem.php';

class Autoloader
{
    /**
     * @var FileSystem
     */
    private FileSystem $fileSystem;

    /**
     * Autoloader constructor.
     * @param FileSystem $fileSystem
     */
    public function __construct(FileSystem $fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    /**
     * @param FileSystem $fileSystem
     *
     * @return void
     */
    public static function init(FileSystem $fileSystem) : void
    {
        spl_autoload_register([new self($fileSystem), 'autoloadController']);
    }

    /**
     * @param string $className
     *
     * @return void
     */
    public function autoloadController(string $className) : void
    {
        $fileName = substr($className, strlen('\\Skywalker\\Controller\\') - 1);

        include $this->fileSystem->getControllerDir() . $fileName . '.php';
    }
}



