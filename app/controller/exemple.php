<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 23.03.2016
 * Time: 14:41
 */

namespace simpleRoutingSystem\controllers;


class exemple
{
    public function show($id = "")
    {

        baseModel::init();
        // your code;
        baseModel::closeConnection();
    }


    public function create($id = "")
    {


    }


    public function edit($id)
    {

    }


    public function destroy($id = '')
    {

    }
}