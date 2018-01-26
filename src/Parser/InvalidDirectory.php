<?php
/**
 * PHP version 7.1
 *
 * This source file is subject to the license that is bundled with this package in the file LICENSE.
 */

namespace PhUml\Parser;

use RuntimeException;
use SplFileInfo;

class InvalidDirectory extends RuntimeException
{
    public static function notFoundAt(SplFileInfo $path): InvalidDirectory
    {
        return new InvalidDirectory("'$path' is not a directory or it cannot be found");
    }
}