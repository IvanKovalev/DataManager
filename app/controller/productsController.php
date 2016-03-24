<?php
/**
 * Created by PhpStorm.
 * User: Dendy
 * Date: 21.03.2016
 * Time: 17:22
 */

namespace simpleRoutingSystem\controllers;
use simpleRoutingSystem\model\baseModel;

class productsController
{
    public function show($id = "")
    {



        baseModel::init();

        $columns['columns'] = baseModel::getTableColumns('products');
        $columns['allData'] = baseModel::selectAll('products');
        header('content-type application/json charset=utf-8');
        echo json_encode($columns);
        http_response_code(200);
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