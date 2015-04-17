<?php
/**
 * Created by PhpStorm.
 * User: Nhuan
 * Date: 3/8/2015
 * Time: 10:51 PM
 */
class Resource extends \BaseController
{
    public function upload()
    {
        $file = Request::file('file');
        return Response::json(array($file));
    }
}