<?php namespace DeSmart\Uniqush\Request\RmPsp;

class RmFcmPspRequest extends AbstractRmPspRequest
{
    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @var string
     */
    protected $apiKey;

    public function __construct($serviceName, $apiKey)
    {
        $this->serviceName = $serviceName;
        $this->apiKey = $apiKey;
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return [
            'service' => $this->serviceName,
            'pushservicetype' => 'fcm',
            'apikey' => $this->apiKey,
        ];
    }
}
