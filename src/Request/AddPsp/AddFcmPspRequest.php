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
    protected $projectId;

    /**
     * @var string
     */
    protected $apiKey;

    public function __construct($serviceName, $projectId, $apiKey)
    {
        $this->serviceName = $serviceName;
        $this->projectId = $projectId;
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
            'projectid' => $this->projectId,
            'apikey' => $this->apiKey,
        ];
    }
}
