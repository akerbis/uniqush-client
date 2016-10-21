<?php namespace DeSmart\Uniqush;

use GuzzleHttp\Client as HttpClient;
use DeSmart\Uniqush\Request\RequestInterface;

class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $http;

    public function __construct($url, HttpClient $http = null)
    {
        $this->http = $http ?: new HttpClient(['base_uri' => $url]);
    }

    /**
     * Send request to Uniqush server
     *
     * @param \DeSmart\Uniqush\Request\RequestInterface $request
     * @return string
     */
    public function send(RequestInterface $request)
    {
        $response = $this->http->request('POST', $request->getUrl(), $request->getQuery());

        if ($response->getStatusCode() === 200) {
            $decoded = json_decode($response->getBody(), true);
            if ($decoded !== false) {
                return $decoded;
            }
            throw new \Exception('Invalid JSON returned: '.(string)$response->getBody());
        }
        throw new \Exception($response->getStatusCode().' response from Uniqush server:'.$this->getReasonPhrase());
    }
}
