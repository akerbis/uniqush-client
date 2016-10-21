<?php namespace DeSmart\Uniqush\Request\AddPsp;

class AddFcmPspRequest extends AbstractAddPspRequest
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
