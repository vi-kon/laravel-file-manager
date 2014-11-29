<?php


namespace ViKon\FileManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class AuthRoute
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 *
 * @package ViKon\FileManager\Facades
 */
class FileUploader extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ViKon\FileManager\FileUploader';
    }
} 