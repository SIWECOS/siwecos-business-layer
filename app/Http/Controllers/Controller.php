<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @SWG\Swagger(
 *     @SWG\Info(
 *     title="SIWECOS Business Layer",
 *     version="1.0.0"
 *   ),
 *   schemes={"http"},
 *   host="http://siwecos-business-layer.dev",
 *   basePath="/api/v1"
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
