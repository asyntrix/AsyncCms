<?php
/**
 * Created by PhpStorm.
 * User: borrom
 * Date: 2/15/16
 * Time: 11:44 PM
 */

namespace AsyncCms\Http\Controllers;

class PageController extends Controller implements AbstractResourceController {

    public function index()
    {
        echo "Index Call";
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function create()
    {
        echo "on Create Call";
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function edit()
    {
        echo "on Edit Call";
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}