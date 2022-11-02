<?php

/*
 *  This file is part of the Quantum Unit Solutions development package.
 * 
 *  (c) Quantum Unit Solutions <http://github.com/dmeikle/>
 * 
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */
namespace QuantumUnit\Http;

/**
 * Request
 *
 * @author Organization: Quantum Unit
 * @author Developer: David Meikle <david@quantumunit.com>
 */
abstract class Request implements HttpInterface{
    
    protected $attributes = array();

    protected $headers = array();

    protected $siteParams;

    /**
     * @param $key
     * @param $value
     * @return void
     */
    public function setAttribute($key, $value) {
        $this->attributes[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function getAttribute($key) {
        if(!array_key_exists($key, $this->attributes)) {

            return null;
        }

        return $this->attributes[$key];
    }

    /**
     * @return array|mixed
     */
    public function getAttributes() {
        return $this->attributes;
    }

    /**
     * @param $key
     * @param $value
     * @return void
     */
    public function setHeader($key, $value) {
        $this->headers[$key] = $value;
    }

    /**
     * @return mixed
     */
    public abstract function getMethod();

    /**
     * @return mixed
     */
    public abstract function getYmlKey();

    /**
     * @return mixed
     */
    public abstract function getSiteParams();

    /**
     * @return mixed
     */
    public abstract function getRequestParams() ;

    /**
     * @param RequestParams $requestParams
     * @return mixed
     */
    public abstract function setRequestParams(RequestParams $requestParams);

    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public abstract function setPostParameter($key, $value);

    /**
     * @return mixed
     */
    public abstract function getNodeConfig();

    /**
     * @param mixed $nodeConfig
     * @return HttpRequest
     */
    public abstract function setNodeConfig(&$nodeConfig);
}
