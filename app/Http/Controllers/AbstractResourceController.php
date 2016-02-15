<?php
/**
 * Created by PhpStorm.
 * User: borrom
 * Date: 2/15/16
 * Time: 11:41 PM
 */

namespace AsyncCms\Http\Controllers;


interface AbstractResourceController {

    public function index();

    public function store();

    public function create();

    public function update();

    public function edit();

    public function destroy();

}