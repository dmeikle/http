<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/1/2017
 * Time: 8:21 PM
 */

namespace QuantumUnit\Http;


use QuantumUnit\Http\Traits\ClientIPAddressTrait;

/**
 * RequestParams
 *
 * @author Organization: Quantum Unit
 * @author Developer: David Meikle <david@quantumunit.com>
 */
class RequestParams
{
    use ClientIPAddressTrait;

    protected $ymlKey;

    protected $server;

    protected $headers;

    protected $post;

    protected $querystring;

    protected $requestParameters = array();

    protected $queryStringParameters;

    protected $uri;

    protected $method;

    protected $layoutType;

    protected $uriParameters;

    protected $siteURL;

    /**
     * @param array $params
     */
    public function __construct(array $params = array()) {

        foreach($params as $key => $value) {
            if(property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getSiteURL() {
        return $this->siteURL;
    }

    /**
     * @param string $siteURL
     * @return $this
     */
    public function setSiteURL(string $siteURL): RequestParams {
        $this->siteURL = $siteURL;
        return $this;
    }


    /**
     * @param string $key
     * @return string|null
     */
    public function getUriParameter(string $key): ?string {
        if(array_key_exists($key, $this->uriParameters)) {
            return $this->uriParameters[$key];
        }
        return null;
    }

    /**
     * @return string
     */
    public function getUriParameters(): string {
        return $this->uriParameters;
    }

    /**
     * @param mixed $uriParameters
     * @return RequestParams
     */
    public function setUriParameters($uriParameters):RequestParams {

        $this->uriParameters = $uriParameters;
        return $this;
    }
    

    /**
     * @return mixed
     */
    public function getQueryStringParameters() {
        if(!is_null($this->queryStringParameters)) {
            return $this->queryStringParameters;
        }

        return $this->getQuerystring();
    }

    /**
     * @param mixed $queryStringParameters
     */
    public function setQueryStringParameters($queryStringParameters) {

        $this->queryStringParameters = $queryStringParameters;

        return $this;
    }

    /**
     * @param mixed $queryStringParameters

    public function getQueryStringParameter($key) {
        if(array_key_exists($key, $this->queryStringParameters)) {
            return $this->queryStringParameters[$key];
        }

        return null;
    }
*/
    /**
     * @return mixed
     */
    public function getRequestParameters() {
        return $this->requestParameters;
    }

    /**
     * @param mixed $requestParameters
     * @return RequestParams
     */
    public function setRequestParameters($requestParameters) {
        $this->requestParameters = $requestParameters;
        return $this;
    }

    public function setPostParameter($key, $value) {
        $this->post[$key] = $value;
    }
    
    /**
     * @return mixed
     */
    public function getLayoutType() {
        return $this->layoutType;
    }

    /**
     * @param mixed $layoutType
     * @return RequestParams
     */
    public function setLayoutType($layoutType) {
        $this->layoutType = $layoutType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * @param mixed $method
     * @return RequestParams
     */
    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYmlKey() {
        return $this->ymlKey;
    }

    /**
     * @param mixed $ymlKey
     * @return RequestParams
     */
    public function setYmlKey($ymlKey) {
      
        $this->ymlKey = $ymlKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServer($key = null) {
        if (!is_null($key) && array_key_exists($key, $this->server)) {
            return $this->server[$key];
        }

        return $this->server;
    }

    /**
     * @param mixed $server
     * @return RequestParams
     */
    public function setServer($server) {
        $this->server = $server;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * @param mixed $headers
     * @return RequestParams
     */
    public function setHeaders($headers) {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPost() {
        return $this->post;
    }

    /**
     * @param mixed $post
     * @return RequestParams
     */
    public function setPost($post) {
        $this->post = $post;
        return $this;
    }

    public function getPostParameter($key) {
        if(array_key_exists($key, $this->post)) {
            return $this->post[$key];
        }

        return null;
    }

    /**
     * @return mixed
     */
    public function getQuerystring($asArray = true) {
        if (!$asArray) {
            return http_build_query($this->querystring);
        }

        return $this->querystring;
    }

    /**
     * @return mixed
     */
    public function getQuerystringParameter($key) {

        if(array_key_exists($key, $this->queryStringParameters)) {
            return $this->queryStringParameters[$key];
        }

        return null;
    }

    /**
     * @param mixed $querystring
     * @return RequestParams
     */
    public function setQuerystring($querystring, $override = false) {

        if($override) {
            $this->querystring = $querystring;

            return $this;
        }

        $this->setUri(key($querystring));
        array_shift($querystring);
        $this->querystring = $querystring;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     * @return RequestParams
     */
    public function setUri($uri) {

        $this->uri = $uri;
        return $this;
    }
    

    public function __call($name, $arguments) {
        // TODO: Implement __call() method.
    }

    public function getUrlSegments()
    {
        $segments = explode('/', $this->uri);
        if(count($segments) > 2) {
            array_pop($segments);
        }
        return $segments;
    }


}