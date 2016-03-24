<?php

namespace simpleRoutingSystem\controllers;

use simpleRoutingSystem\model\baseModel;


class baseController
{

    public function Index()
    {
        baseModel::init();
        $tableNames = baseModel::getTables();
        require_once'app/view/page.php';
        baseModel::closeConnection();
    }
}