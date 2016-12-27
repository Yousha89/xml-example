<?php

/**
 * Created by PhpStorm.
 * User: ahsuoy
 * Date: 12/27/2016
 * Time: 10:38 PM
 */
class example
{

    public function getXML($files = array()) {

        $results = [];

        foreach($files as $fileKey => $file) {

            if(file_exists($file))
                $results[] = simplexml_load_file($file);
        }
    return $results;
    }
}