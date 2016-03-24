<?php

namespace simpleRoutingSystem\controllers;

use simpleRoutingSystem\model\baseModel;

class customersController
{

    public function show($id = "")
    {

        baseModel::init();

        $columns['columns'] = baseModel::getTableColumns('customers');
        $columns['allData'] = baseModel::selectAll('customers');
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