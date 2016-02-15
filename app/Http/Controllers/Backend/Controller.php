<?php
/**
 * Created by PhpStorm.
 * User: borrom
 * Date: 2/15/16
 * Time: 11:56 PM
 */

namespace AsyncCms\Http\Controllers\Backend;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
}