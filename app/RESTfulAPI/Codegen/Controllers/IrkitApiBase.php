<?php
/**
 * IRKit Wrapper
 * IRKit Wrapper
 *
 * OpenAPI spec version: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\RESTfulAPI\Codegen\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class IrkitApiBase extends Controller
{
    /**
     * Operation command
     *
     * issue a command to accessory.
     *
     * @param Request $request request object (required)
     * @param string $accessory accessory name (required)
     * @param string $command command name (required)
     *
     * @return \Illuminate\Http\Response
     */
    public function commandWithValidate(Request $request, $accessory, $command)
    {
        $this->commandValidate($request, $accessory, $command);
        return $this->command($request, $accessory, $command);
    }

    /**
     * Validate command
     *
     * issue a command to accessory.
     *
     * @param Request $request request object (required)
     * @param string $accessory accessory name (required)
     * @param string $command command name (required)
     *
     */
    protected function commandValidate(Request $request, $accessory, $command)
    {
        // path params validation

        // not path params validation
    }

    abstract protected function command(Request $request, $accessory, $command);
}
