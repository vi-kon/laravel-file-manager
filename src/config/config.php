<?php

return [
    /*
    | --------------------------------------------------------------------------
    | File manager type
    | --------------------------------------------------------------------------
    | File manager type
    |
    | Available options: file, database
    |
    */
    'type'      => 'file',
    /*
    | --------------------------------------------------------------------------
    | File version
    | --------------------------------------------------------------------------
    | Turn on or off file version's. If option is on, then files with same name
    | are saved with higher version number.
    */
    'versioned' => true,
    /*
    | --------------------------------------------------------------------------
    | Default input id
    | --------------------------------------------------------------------------
    | This id is used for creating input field id and referencing fileuploader
    | instance.
    |
    */
    'id'        => 'fileuploader',
    /*
    | --------------------------------------------------------------------------
    | Template file
    | --------------------------------------------------------------------------
    | Template file which are rendered when inserted into template
    |
    */
    'template'  => 'file-manager::file-uploader',

];