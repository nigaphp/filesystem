<?php
/*
 * This file is part of the Niga PHP framework package
 *
 * (c) Abass Dev <abass@abassdev.com>
 */

namespace Niga\Framework\Filesystem;

use Niga\Filesystem\Exceptions\FileNotFoundException;
use Niga\Filesystem\Exceptions\DirNotFoundException;

/**
 * Filesystem
 *
 * @author Abass Dev <abass@abassdev.com>
 */
class Filesystem
{

    /**
     * Default app root
     *
     * @var string $ROOT
     */
    public static $ROOT;

    /**
     * Constructor
     *
     * @param string $root
     */
    public function __construct($root)
    {
        self::$ROOT = $root;
    }

    /**
     * @var string $fieName
     */
    private string $fieName;

    public function isFile(string $fieName): bool
    {
        if (!file_exists($fieName)) {
            throw new FileNotFoundException("Fatal error: {$fieName} file not found");
        }
        return true;
    }

    /**
     * @param string $dirName
     *
     * @return bool
     */
    public function isDir($dirName)
    {
        if (!is_dir($dirName)) {
            throw new DirNotFoundException("Fatal error: {$dirName} directory not found");
        }
        return true;
    }
}
