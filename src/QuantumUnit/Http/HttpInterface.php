<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/28/2017
 * Time: 6:48 PM
 */

namespace QuantumUnit\Http;

/**
 * HttpInterface
 *
 * @author Organization: Quantum Unit
 * @author Developer: David Meikle <david@quantumunit.com>
 */
interface HttpInterface
{
    public function setHeader($key, $value);
    
    public function setAttribute($key, $value);

    public function getAttribute($key);

    public function getAttributes();

    public function getSiteParams();

    public function getRequestParams();
}