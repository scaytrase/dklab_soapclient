<?php
/**
 * Created by PhpStorm.
 * User: batanov.pavel
 * Date: 02.12.2015
 * Time: 8:49
 */

namespace Dklab\SoapClient;

/**
 * Class DebugSoapFault
 *
 * @package Dklab\SoapClient
 */
class DebugSoapFault extends \SoapFault
{
    public $location;
    public $request;
    public $response;
}
